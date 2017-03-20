<?php
namespace dvizh\app\logic\discount;

use dvizh\app\interfaces\services\singletons\{UserOrder, UserDiscount};
use dvizh\app\interfaces\entities\Discount;
use dvizh\app\logic\discount\PersentDiscounter;

class CumulativeDiscounter extends \dvizh\app\base\Component
{
    protected $order;
    protected $cart;
    protected $discountService;
    protected $discount;

    public function __construct(UserCart $cart, UserOrder $order, UserDiscount $discountService, Discount $discount)
    {
        $this->discount = $discount;
        $this->discountService = $discountService;
        $this->order = $order;
        $this->cart = $cart;
    }

    public function execute()
    {
        if($discount = $this->discountService->getDiscountByOrderSum($this->order->getTotalSum())) {
            (new PersentDiscounter($this->cart, $discount->getDiscount()))->execute();
        }
    }
}
<?php
namespace dvizh\app\logic\discount;

use dvizh\app\interfaces\services\singleton\{UserCart, UserOrder, UserPromocode};
use dvizh\app\logic\cart\CostSetter;

class CumulativeDiscountCalculate extends \dvizh\app\base\Component
{
    protected $cart;
    protected $order;
    protected $promocode;

    public function __construct(UserCart $cart, UserOrder $order, UserPromocode $promocode)
    {
        $this->cart = $cart;
        $this->promocode = $promocode;
        $this->order = $order;
    }

    public function execute()
    {
        $cost = $this->cart->getCost();

        if($cost > 0) {
            $discount = $this->promocode->getDiscountByOrderSum($this->order->getTotalSum());

            if($discount > 0 && $discount <= 100) {
                $newCost = $cost-($cost*$discount)/100;
                (new CostSetter($this->cart, $newCost))->execute();
            }
        }
    }
}
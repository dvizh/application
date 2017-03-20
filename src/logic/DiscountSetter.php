<?php
namespace dvizh\app\logic;

use dvizh\app\interfaces\services\singletons\{UserCart, UserOrder, UserDiscount};
use dvizh\app\logic\discount\PersentDiscounter;
use dvizh\app\logic\discount\CumulativeDiscounter;

class DiscountSetter extends \dvizh\app\base\Component
{
    const TYPE_CUMULATIVE = 'cumulative';
    const TYPE_PERCENT = 'percent';

    protected $cart;
    protected $order;
    protected $discount;

    public function __construct(UserCart $cart, UserOrder $order, UserDiscount $discount)
    {
        $this->cart = $cart;
        $this->discount = $discount;
        $this->order = $order;
    }

    public function execute()
    {
        $cost = $this->cart->getCost();

        if($cost > 0 && $discount = $this->discount->getDiscountEntity()) {
            if($discount->isActive()) {
                switch($discount->getType()) {
                    case self::TYPE_CUMULATIVE:
                        (new CumulativeDiscounter($this->cart, $this->order, $this->discount, $discount))->execute();
                        break;

                    case self::TYPE_PERCENT:
                        (new PersentDiscounter($this->cart, $discount->getDiscount()))->execute();
                        break;
                }
            }
        }
    }
}
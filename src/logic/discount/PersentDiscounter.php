<?php
namespace dvizh\app\logic\discount;

use dvizh\app\interfaces\services\singletons\UserCart;
use dvizh\app\logic\cart\CostSetter;

class PersentDiscounter extends \dvizh\app\base\Component
{
    protected $cart, $persent;

    public function __construct(UserCart $cart, int $persent)
    {
        $this->persent = $persent;
        $this->cart = $cart;
    }

    public function execute()
    {
        $cost = $this->cart->getCost();

        if($cost > 0 && $this->persent > 0) {
            $newCost = $cost-($cost*$this->persent)/100;
            (new CostSetter($this->cart, $newCost))->execute();
        }
    }
}
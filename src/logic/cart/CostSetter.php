<?php
namespace dvizh\app\logic\cart;

use dvizh\app\interfaces\services\singleton\UserCart;

class CostSetter extends \dvizh\app\base\Component
{
    protected $cart;
    protected $cost;

    public function __construct(UserCart $cart, Int $cost)
    {
        $this->cart = $cart;
        $this->cost = $cost;
    }

    public function execute()
    {
        $this->cart->setCost($this->cost);
    }
}
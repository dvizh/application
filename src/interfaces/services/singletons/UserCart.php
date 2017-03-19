<?php
namespace dvizh\app\interfaces\services\singletons;

interface UserCart
{
    public function getCartEntity() : \dvizh\app\interfaces\entities\Cart;

    public function getElements() : array;

    public function getCost() : int;

    public function getCount() : int;

    public function setCost(int $cost);

    public function putElement(\dvizh\app\interfaces\entities\Goods $product, int $count = 1, $price = null, $options = []) : int;

    public function hasElement(\dvizh\app\interfaces\entities\Goods $model, $price, $options = []) : ?\dvizh\app\interfaces\entities\CartElement;

    public function truncate() : bool;
}
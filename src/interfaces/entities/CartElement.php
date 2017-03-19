<?php
namespace dvizh\app\interfaces\entities;

interface CartElement
{
    public function setModelName($modelName);

    public function setCart(Cart $cart);

    public function setName($name);

    public function setProduct(Goods $goods);

    public function setCount($count);

    public function setPrice($price);

    public function setOptions($options);

    public function setDescription($description);

    public function setHash($hash);

    public function getId();

    public function getCart();

    public function getProduct() : ?Goods;

    public function getHash();

    public function saveData();

    public function remove();
}
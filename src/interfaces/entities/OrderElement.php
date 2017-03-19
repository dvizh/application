<?php
namespace dvizh\app\interfaces\entities;

interface OrderElement
{
    public function setAssigment($isAssigment);

    public function setModelName($modelName);

    public function setName($name);

    public function setItemId($itemId);

    public function setCount($count);

    public function setPrice($price);

    public function setOptions($options);

    public function setDescription($description);

    public function setOrder(Order $order);

    public function getAssigment();

    public function getOrder() : Order;

    public function getProduct() : ?Goods;

    public function saveData();
}
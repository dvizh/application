<?php
namespace dvizh\app\interfaces\entities;

interface Goods
{
    public function getItemId();
    public function getName();
    public function getPrice();
    public function getBasePrice();
    public function getCount();
    public function getModelName();
    public function getOptions();
    public function getDescription();

    public function setItemId($itemId);
    public function setName($name);
    public function setPrice($price);
    public function setBasePrice($basePrice);
    public function setCount($count);
    public function setModelName($modelName);
    public function setOptions($options);
    public function setDescription($description);

    public static function getById($id) : ?Goods;

    public function saveData();
}
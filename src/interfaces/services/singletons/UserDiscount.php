<?php
namespace dvizh\app\interfaces\services\singletons;

interface UserDiscount
{
    public function getDiscountByOrderSum() : ?int;

    public function getDiscountEntity() : ?\dvizh\app\interfaces\entities\Discount;

    public function hasDiscount() : bool;

    public function setDiscount(\dvizh\app\interfaces\entities\Discount $discount) : bool;

    public function cancelDiscount();
}
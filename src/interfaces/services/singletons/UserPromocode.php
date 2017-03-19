<?php
namespace dvizh\app\interfaces\services\singletons;


interface UserPromocode
{
    public function getDiscountByOrderSum() : int;

    public function getDiscount() : int;
}
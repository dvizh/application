<?php
namespace dvizh\app\interfaces\services;

interface Discount
{
    public function getUserDiscountByOrderSum(\dvizh\app\interfaces\entities\User $user) : ?int;

    public function getById(int $id) : \dvizh\app\interfaces\entities\Discount;
}
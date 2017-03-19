<?php
namespace dvizh\app\interfaces\services;

interface Cart
{
    public function getUserCartEntity(\dvizh\app\interfaces\entities\User $user) :  \dvizh\app\interfaces\entities\Cart;
}
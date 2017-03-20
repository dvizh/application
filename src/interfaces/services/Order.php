<?php
namespace dvizh\app\interfaces\services;

interface Order
{
    public function getById(int $id) : \dvizh\app\interfaces\entities\Order;

    public function getUserTotalSum(\dvizh\app\interfaces\entities\User $user) : int;

    public function filling();

    public function cancel();

    public function cancelElement(\dvizh\app\interfaces\entities\CartElement $element);

    public function putElement(\dvizh\app\interfaces\entities\CartElement $element) : int;

    public function setStatus($status);
}
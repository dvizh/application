<?php
namespace dvizh\app\interfaces\services\singletons;

interface UserOrder
{
    public function getTotalSum() : int;
}
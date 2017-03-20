<?php
namespace dvizh\app\interfaces\entities;

interface Discount
{
    public function getId() : ?int;

    public function getType();

    public function getCode();

    public function getAmount() : ?int;

    public function getDiscount() : ?int;

    public function isActive() : bool;
}
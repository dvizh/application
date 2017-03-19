<?php
namespace dvizh\app\interfaces\entities;

interface Order
{
    public function getId();

    public function getAssigment();

    public function getElements();

    public function getCost() : int;

    public function getCount() : int;

    public function setDeleted($deleted);

    public function setStatus($status);

    public function setCost(int $cost);

    public function setCount(int $count);

    public function saveData();
}
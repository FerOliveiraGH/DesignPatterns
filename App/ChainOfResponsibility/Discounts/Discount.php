<?php

namespace App\ChainOfResponsibility\Discounts;

use App\Strategy\Order;

abstract class Discount
{
    protected Discount $nextDiscount;

    public function __construct(Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calcDiscount(Order $order): float;
}
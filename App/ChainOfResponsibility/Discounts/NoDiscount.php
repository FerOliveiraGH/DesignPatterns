<?php

namespace App\ChainOfResponsibility\Discounts;

use App\Strategy\Order;

class NoDiscount extends Discount
{
    public function __construct()
    {
    }

    public function calcDiscount(Order $order): float
    {
        return 0;
    }
}
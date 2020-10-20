<?php

namespace App\ChainOfResponsibility;

use App\ChainOfResponsibility\Discounts\DiscountPerItems;
use App\ChainOfResponsibility\Discounts\DiscountPerValue;
use App\ChainOfResponsibility\Discounts\NoDiscount;
use App\Strategy\Order;

class CalculatorDiscount
{
    public function calcOrderDiscount(Order $order): float
    {
        $discounts = new DiscountPerItems(new DiscountPerValue(new NoDiscount()));

        return $discounts->calcDiscount($order);
    }
}
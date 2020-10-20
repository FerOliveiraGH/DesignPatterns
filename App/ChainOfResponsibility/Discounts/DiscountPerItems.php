<?php

namespace App\ChainOfResponsibility\Discounts;

use App\Strategy\Order;

class DiscountPerItems extends Discount
{
    public function calcDiscount(Order $order): float
    {
        if ($order->items > 5) {
            return $order->value * 0.1;
        }

        return $this->nextDiscount->calcDiscount($order);
    }
}
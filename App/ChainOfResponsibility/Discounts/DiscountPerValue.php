<?php

namespace App\ChainOfResponsibility\Discounts;

use App\Strategy\Order;

class DiscountPerValue extends Discount
{
    public function calcDiscount(Order $order): float
    {
        if ($order->value > 500) {
            return $order->value * 0.05;
        }

        return $this->nextDiscount->calcDiscount($order);
    }
}
<?php

namespace App\Strategy\Taxes;

use App\Strategy\Order;

class Icms implements Tax
{
    public function calcTax(Order $order): float
    {
        return $order->value * 0.1;
    }
}
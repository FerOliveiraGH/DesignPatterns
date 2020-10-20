<?php

namespace App\Strategy\Taxes;

use App\Strategy\Order;

class Iss implements Tax
{
    public function calcTax(Order $order): float
    {
        return $order->value * 0.06;
    }
}
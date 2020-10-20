<?php

namespace App\Strategy\Taxes;

use App\Strategy\Order;

interface Tax
{
    public function calcTax(Order $order): float;
}
<?php

namespace App\Strategy;

use App\Strategy\Taxes\Tax;

class CalculatorTaxes
{
    public function calcOrderTax(Order $order, Tax $tax)
    {
        return $tax->calcTax($order);
    }
}
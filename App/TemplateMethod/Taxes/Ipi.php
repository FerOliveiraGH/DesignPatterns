<?php

namespace App\TemplateMethod\Taxes;

use App\Strategy\Order;

class Ipi extends TaxDualValues
{
    /**
     * @param Order $order
     * @return bool
     */
    protected function checkMaxTax(Order $order): bool
    {
        return $order->value > 100 && $order->items > 3;
    }

    /**
     * @param Order $order
     * @return float
     */
    protected function calcMaxTax(Order $order): float
    {
        return $order->value * 0.05;
    }

    /**
     * @param Order $order
     * @return float
     */
    protected function calcMinTax(Order $order): float
    {
        return $order->value * 0.015;
    }
}
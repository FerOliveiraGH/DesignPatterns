<?php

namespace App\TemplateMethod\Taxes;

use App\Strategy\Order;

class Cofin extends TaxDualValues
{
    /**
     * @param Order $order
     * @return bool
     */
    protected function checkMaxTax(Order $order): bool
    {
        return $order->value > 500;
    }

    /**
     * @param Order $order
     * @return float
     */
    protected function calcMaxTax(Order $order): float
    {
        return $order->value * 0.2;
    }

    /**
     * @param Order $order
     * @return float
     */
    protected function calcMinTax(Order $order): float
    {
        return $order->value * 0.025;
    }
}
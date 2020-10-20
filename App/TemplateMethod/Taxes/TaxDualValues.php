<?php

namespace App\TemplateMethod\Taxes;

use App\Strategy\Order;
use App\Strategy\Taxes\Tax;

abstract class TaxDualValues implements Tax
{
    public function calcTax(Order $order): float
    {
        if ($this->checkMaxTax($order)) {
            return $this->calcMaxTax($order);
        }

        return $this->calcMinTax($order);
    }

    /**
     * @param Order $order
     * @return bool
     */
    abstract protected function checkMaxTax(Order $order): bool;

    /**
     * @param Order $order
     * @return float
     */
    abstract protected function calcMaxTax(Order $order): float;

    /**
     * @param Order $order
     * @return float
     */
    abstract protected function calcMinTax(Order $order): float;
}
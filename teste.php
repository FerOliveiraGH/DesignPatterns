<?php

require 'vendor\autoload.php';

use App\ChainOfResponsibility\CalculatorDiscount;
use App\Strategy\CalculatorTaxes;
use App\Strategy\Order;
use App\Strategy\Taxes\Icms;
use App\Strategy\Taxes\Iss;
use App\TemplateMethod\Taxes\Cofin;
use App\TemplateMethod\Taxes\Ipi;

$calculator = new CalculatorTaxes();

$order = new Order();
$order->value = 600;
$order->items = 6;

echo "ISS: " . $calculator->calcOrderTax($order, new Iss());
echo ' ';
echo "ICMS: " . $calculator->calcOrderTax($order, new Icms());
echo ' ';

$discounts = new CalculatorDiscount();
echo "Discount: " . $discounts->calcOrderDiscount($order);
echo ' ';

echo "Ipi: " . $calculator->calcOrderTax($order, new Ipi());
echo ' ';
echo "Cofin: " . $calculator->calcOrderTax($order, new Cofin());
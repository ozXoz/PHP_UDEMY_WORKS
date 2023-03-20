<?php


$quantity = 3;
$shipping_cost = ($quantity > 1) ? 5 + ($quantity * 2.5) : 5;
echo $shipping_cost;
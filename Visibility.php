<?php

require_once "data/Product.php";

$product = new Product("Appel", 20);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() .PHP_EOL;
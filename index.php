<?php

require __DIR__."/vendor/autoload.php";

use App\Http\AbstractFactory\DigtalProduct;
use App\Http\AbstractFactory\ProductFactory;
use App\Http\AbstractFactory\ShippableProduct;

//工厂模式
$factory = new ProductFactory();
$product = $factory->createDigitalProduct(150);

var_dump($product instanceof DigtalProduct);
echo '<br/>';
var_dump($product->calculatePrice());
$shippingableProduct = $factory->createShippableProduct(150);
echo '<br/>';
var_dump($shippingableProduct instanceof ShippableProduct);
echo '<br/>';
var_dump($shippingableProduct->calculatePrice());




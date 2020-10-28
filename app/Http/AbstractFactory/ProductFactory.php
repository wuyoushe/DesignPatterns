<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/27
 * Time: 15:33
 */

namespace App\Http\AbstractFactory;


class ProductFactory
{
    const SHIPPING_COSTS = 50;

    public function createShippableProduct(int $price): Product
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    public function createDigitalProduct(int $price): Product
    {
        return new DigtalProduct($price);
    }

}
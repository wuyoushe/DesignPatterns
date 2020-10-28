<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/27
 * Time: 15:27
 */

namespace App\Http\AbstractFactory;


class ShippableProduct implements Product
{
    private $productPrice;
    private $shippingCosts;

    //构造函数初始化变量
    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->productPrice + $this->shippingCosts;
    }
}
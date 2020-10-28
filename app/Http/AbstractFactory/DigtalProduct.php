<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/27
 * Time: 15:31
 */

namespace App\Http\AbstractFactory;


class DigtalProduct implements Product
{

    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->price;
    }
}
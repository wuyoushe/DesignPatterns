<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/27
 * Time: 15:25
 */

namespace App\Http\AbstractFactory;


interface Product
{
    public function calculatePrice(): int;
}
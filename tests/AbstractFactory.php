<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/27
 * Time: 16:20
 */

namespace Tests;

use App\Http\AbstractFactory\DigtalProduct;
use App\Http\AbstractFactory\ProductFactory;
use App\Http\AbstractFactory\ShippableProduct;
use PHPUnit\Framework\TestCase;


class AbstractFactory extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertInstanceOf(DigtalProduct::class, $product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class, $product);
    }
    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertEquals(150, $product->calculatePrice());
    }
    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertEquals(200, $product->calculatePrice());
    }

}
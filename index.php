<?php

require __DIR__."/vendor/autoload.php";

use App\Http\AbstractFactory\DigtalProduct;
use App\Http\AbstractFactory\ProductFactory;
use App\Http\AbstractFactory\ShippableProduct;
use App\Http\WorkPool\WorkerPool;

//工厂模式
//$factory = new ProductFactory();
//$product = $factory->createDigitalProduct(150);
//
//var_dump($product instanceof DigtalProduct);
//echo '<br/>';
//var_dump($product->calculatePrice());
//$shippingableProduct = $factory->createShippableProduct(150);
//echo '<br/>';
//var_dump($shippingableProduct instanceof ShippableProduct);
//echo '<br/>';
//var_dump($shippingableProduct->calculatePrice());

/**
 * 对象池模式
 */
//$pool = new WorkerPool();
//
//$worker1 = $pool->get();
//$worker2 = $pool->get();
//
//echo '<pre/>';
//var_dump($pool);
//var_dump($worker1);
//var_dump($worker2);

/**
 * 适配器模式
 */

//$book = new \App\Http\Adapter\PaperBook();
//
//$book->open();
//$book->turnPage();
//
//var_dump($book->getPage());
//
//$kindle = new \App\Http\Adapter\Kindle();
//将不兼容的格式注入适配器
//$book2 = new \App\Http\Adapter\EBookAdapter($kindle);
//
//$book2->open();
//$book2->turnPage();
//$book2->open();
//var_dump($book2->getPage());

//桥接模式
//$service = new \App\Http\Bridge\HelloWorldService(new \App\Http\Bridge\PlainTextFormatter());
//var_dump($service->get());
//
//$service2 = new \App\Http\Bridge\HelloWorldService(new \App\Http\Bridge\HtmlFormatter());
//var_dump($service2->get());

//组合模式
//$form = new \App\Http\Component\Form();
//$form->addElement(new \App\Http\Component\TextElement('Email: '));
//$form->addElement(new \App\Http\Component\InputElement());
//
//$embed = new \App\Http\Component\Form();
//$embed->addElement(new \App\Http\Component\TextElement('Password: '));
//$embed->addElement(new \App\Http\Component\InputElement());
//$form->addElement($embed);
// 展示html标签设置Header头 header("Content-Type: text/html; charset=utf-8");
//如果要将html标签转为html实体，则应用htmlentities()实现
//header("Content-Type: text/html; charset=utf-8");
//echo $form->render();
//echo "<br/>";
//echo htmlentities($form->render());




<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/21
 * Time: 16:29
 */

namespace App\Http\Adapter;


interface Book
{
    public function turnPage();

    public function open();

    public function getPage():int;
}
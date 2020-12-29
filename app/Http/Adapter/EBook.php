<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/21
 * Time: 16:33
 */

namespace App\Http\Adapter;


interface EBook
{
    public function unlock();

    public function pressNext();

    public function getPage();

}
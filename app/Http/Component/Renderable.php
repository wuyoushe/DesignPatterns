<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:50
 */

namespace App\Http\Component;


interface Renderable
{
    public function render(): string;
}
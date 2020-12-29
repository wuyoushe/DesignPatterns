<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:16
 */

namespace App\Http\Bridge;


interface Formatter
{
    public function format(string $text): string;
}
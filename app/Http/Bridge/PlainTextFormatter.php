<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:17
 */

namespace App\Http\Bridge;


class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }

}
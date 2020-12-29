<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:54
 */

namespace App\Http\Component;


class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
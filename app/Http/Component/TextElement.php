<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:55
 */

namespace App\Http\Component;


class TextElement implements Renderable
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}
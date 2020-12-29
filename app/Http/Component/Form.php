<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:50
 */

namespace App\Http\Component;


class Form implements Renderable
{
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }

}
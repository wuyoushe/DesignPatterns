<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/21
 * Time: 16:30
 */

namespace App\Http\Adapter;


class PaperBook implements Book
{
    public $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }

}
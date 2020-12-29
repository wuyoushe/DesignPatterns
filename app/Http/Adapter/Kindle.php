<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/22
 * Time: 11:42
 */

namespace App\Http\Adapter;


class Kindle implements EBook
{
    public $page = 1;
    public $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
        var_dump('解锁');
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
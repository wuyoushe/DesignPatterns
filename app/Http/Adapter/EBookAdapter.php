<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/22
 * Time: 9:33
 */

namespace App\Http\Adapter;


class EBookAdapter implements Book
{
    protected $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }


}
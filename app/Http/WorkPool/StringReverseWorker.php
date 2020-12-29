<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/21
 * Time: 15:47
 */

namespace App\Http\WorkPool;

use DateTime;

class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }

}
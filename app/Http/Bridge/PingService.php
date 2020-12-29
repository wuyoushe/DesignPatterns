<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/12/25
 * Time: 11:25
 */

namespace App\Http\Bridge;


class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}
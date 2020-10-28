<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/28
 * Time: 10:48
 */

namespace App\Http\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var array object
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     * @return mixed
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/28
 * Time: 10:51
 */

namespace App\Http\Builder;


use App\Http\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;

}
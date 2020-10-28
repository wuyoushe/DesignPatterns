<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/28
 * Time: 11:01
 */

namespace App\Http\Builder;


use App\Http\Builder\Parts\Vehicle;

class CarBuilder
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle():Vehicle
    {
        return $this->car;
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

}
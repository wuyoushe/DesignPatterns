<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/28
 * Time: 10:55
 */

namespace App\Http\Builder;


use App\Http\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->truck = new Parts\Truck();
    }

    public function getVehicle(): Vehicle
    {
        // TODO: Implement getVehicle() method.
        return $this->truck;
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }


}
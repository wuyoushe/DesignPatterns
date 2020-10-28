<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/10/28
 * Time: 10:46
 */

namespace App\Http\Builder;


use App\Http\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder):Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }

}
<?php

declare(static_types= 1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors(): void
    {
        $this->car->setPart(key: 'rightDoor', value: new Door());
        $this->car->setPart(key: 'leftDoor', value: new Door());
        $this->car->setPart(key: 'trunkLip', value: new Door());
    }

    public function addEngine(): void
    {
        $this->car->setPart(key: 'engine', value: new Engine());
    } 

    public function addWheel(): void
    {
        $this->car->setPart(key: 'wheelLF', value: new Wheel());
        $this->car->setPart(key: 'wheelRF', value: new Wheel());
        $this->car->setPart(key: 'wheelLR', value: new Wheel());
        $this->car->setPart(key: 'wheelRR', value: new Wheel());
    }

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
       return $this->car; 
    }
    
}
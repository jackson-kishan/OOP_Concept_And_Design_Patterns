<?php

declare(static_types = 1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;


class TruckBuilder implements Builder
{
  
    private Truck $truck;


    public function addDoors(): void 
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel(): void
    {
        $this->truck->setPart('Wheel1', new Wheel());
        $this->truck->setPart('Wheel2', new Wheel());
        $this->truck->setPart('Wheel3', new Wheel());
        $this->truck->setPart('Wheel4', new Wheel());
        $this->truck->setPart('Wheel5', new Wheel());
        $this->truck->setPart('Wheel6', new Wheel());
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
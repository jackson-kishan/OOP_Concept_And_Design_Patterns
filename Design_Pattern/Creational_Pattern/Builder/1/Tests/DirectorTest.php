<?php

declare(static_type=1);

namespace  DesignPatterns\Creational\Builder\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
/**
 *  Builder Pattern:
 * 
 *  Builder is an interface that build parts of a complex object.
 * 
 *  Sometims, if the builder has a better knowledge of what it builds, this interface could be an abstract class with default methods (aka adapter)
 * 
 *  if you have a complex inheritance tree for objects, it is logical to have a complex inheritance tree for builders too. 
 *  
 *  Builders have often a fluent interface, see the mock builder of PHPUnit for exapmle.
 * 
 * Learn from: https://designpatternsphp.readthedocs.io/en/latest/Creational/Builder/README.html
 */


 class DirectorTest extends TestCase
 {

    public function TestCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new DirectorTest())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }

 }
<?php

/** Factory Methods:->
 * 
 *  The good point over the simpleFactory is you can subclass it to implement different ways to create objects.
 *  
 * For simple cases, this abstract class could be just an interface.
 * 
 * This pattern is a "Real" design Pattern beacuse it achives the Dependency Inversion principle a.k.a. the "D" in SOLID principles.
 * 
 * 
 *  */

declare(static_types = 1);

namespace Creational\FactoryMethod\Test;

use Creational\FactoryMethod\FileLogger;
use Creational\FactoryMethod\FileLoggerFactory;
use Creational\FactoryMethod\StdoutLogger;
use Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest implements TestCase
{
  public function testCanCreateStdoutLogging()
  {
    $loggerFactory = new StdoutLoggerFactory();
    $logger = $loggerFactory->createLogger();

    $this->assertInstanceOf(StdoutLogger::class, $logger);
  }

  public function testCanCreateFileLogging()
  {
    $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
    $logger = $loggerFactory->createLogger();

    $this->assertIntanceOf(FileLogger::class, $logger);
  }
}
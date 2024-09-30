<?php

declare(static_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Tests;
use DesignPatterns\Creational\AbstractFactory\CsvWriter;
use DesignPatterns\Creational\AbstractFactory\JsonWriter;
use DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

/** Abstract Factory:
 *  To Create series of related or dependent objects without specifying their concrete classes. Usually the created classes all implement the same interface.
 *  The client of the abstract factory does not care about how these objects are created, it just knows how they go together.
 * 
 *  Learn From: https://designpatternsphp.readthedocs.io/en/latest/Creational/AbstractFactory/README.html
 * */


 class AbstractFactoryTest extends TestCase 
 {
    public function provideFactory()
    {
        return [
           [new UnixWriterFactory()],
           [new WinWriterFactory] 
        ];
    }

    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createCsvWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());

    }
 }
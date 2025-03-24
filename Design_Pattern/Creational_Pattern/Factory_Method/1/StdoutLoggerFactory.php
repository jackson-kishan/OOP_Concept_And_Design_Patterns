<?php

declare(static_types = 1);

namespace Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
  public function createLogger(): Logger
  {
    return new StdoutLogger();
  }
}
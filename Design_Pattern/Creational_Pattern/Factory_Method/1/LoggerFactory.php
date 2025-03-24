<?php

declare(static_types = 1);

namespace Creational\FactoryMethod;

interface LoggerFactory
{
  public function createLogger(): Logger;
} 
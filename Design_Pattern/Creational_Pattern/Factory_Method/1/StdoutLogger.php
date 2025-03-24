<?php

declare(static_types = 1);

namespace Creational\FactoryMethod;

class StdoutLogger implements Logger
{
  public function log(string $message)
  {
    echo $message;
  }
}
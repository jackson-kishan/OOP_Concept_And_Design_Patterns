<?php

declare(static_types =1);

namespace Creational\FactoryMethod;

interface Logger
{
  public function log(string $message);
}
<?php

namespace Xofttion\IoC;

use Xofttion\IoC\Contracts\IFactory;
use Xofttion\IoC\Contracts\IObject;
use Xofttion\IoC\Objects\ObjectValue;

class Factory implements IFactory
{
    // Métodos sobrescritos de la interfaz IFactory

    public function build(string $ref): ?IObject
    {
        return ObjectValue::build($ref);
    }
}

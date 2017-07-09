<?php

namespace App\Services;

use ReflectionMethod;


abstract class GenericServiceImple implements GenericService
{
    /**
 	* Se debe implementar en cada servicio
 	* @return Modelo ORM de Eloquent
    */
    abstract public function getModel();

}

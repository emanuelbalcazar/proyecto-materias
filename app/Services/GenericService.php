<?php

namespace App\Services;

/**
 * Logica de negocios básica de cualquier servicio
 */
interface GenericService
{

    /**
 	* Funcion a implementar en cada servicio, esto evita que se realizen 'saltos'.
 	* sobre las capas de la arquitectura.
 	* controllers -> services -> models.
 	* @return Modelo ORM de Eloquent.
    */
    public function getModel();

}

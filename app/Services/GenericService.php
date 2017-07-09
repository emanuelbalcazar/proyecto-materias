<?php

namespace App\Services;

/**
 * Logica de negocios básica de cualquier servicio
 */
interface GenericService
{

    /**
 	* Funcion a implementar en cada servicio
 	* @return Modelo ORM de Eloquent.
    */
    public function getModel();

}

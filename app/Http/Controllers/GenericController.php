<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controlador abstracto, agrupa las funciones que deben implementar todos los
 * controladores creados.
 */
abstract class GenericController extends Controller
{
    /**
     * Funcion a implementar que retorna el servicio utilizado por el controlador.
     * Por ej: puedo solicitar al controlador que me retorne el servicio utilizado
     * para recuperar el modelo correspondiente.
     */
    abstract public function getService();
}

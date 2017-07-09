<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo generico, todos los modelos extienden de esta clase que agrupa
 * los atributos y funciones comunes.
 */
abstract class GenericModel extends Model
{
    /**
     * Nombre de la tabla asociada al modelo, se sobreescribe en cada implementacion.
     * @var string
     */
    protected $table = '';

    /**
     * La base de datos no registrara el timestamp de las creaciones o
     * actualizaciones de los registros, evitando asi las columnas de timestamp extras.
     * @var boolean
     */
    public $timestamps = FALSE;

    /**
     * Retorna el nombre de la tabla a la que corresponde el modelo.
     * @return [String]
     */
    public function getTable()
    {
        return $this->table;
    }

}

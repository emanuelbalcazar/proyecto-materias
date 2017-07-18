<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase que representa una Universidad, extiende de GenericModel.
 */
class University extends GenericModel
{
    // nombre de la tabla a la que corresponde el modelo.
    protected $table = 'universities';
}

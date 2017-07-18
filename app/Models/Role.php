<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Clase que representa un Rol de usuario.
 */
class Role extends GenericModel
{
    // nombre de la tabla a la que corresponde el modelo.
    protected $table = 'roles';

    /**
    * Defino la cardinalidad en la base de datos, los roles tienen vinculacion a
    * una tabla intermedia 'roles de usuario'.
    */
    public function roles()
    {
        return $this->belongsToMany('App\Models\User', 'role_user', 'user_id', 'role_id');
    }

}

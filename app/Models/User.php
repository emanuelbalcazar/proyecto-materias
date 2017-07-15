<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Clase que representa un Usuario, extiende de GenericModel.
 */
class User extends GenericModel
{
    protected $table = 'users';

    /**
    * Defino la cardinalidad en la base de datos, usuarios tiene vinculacion a
    * una tabla intermedia 'roles de usuario'.
    */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_user', 'user_id', 'role_id');
    }

}

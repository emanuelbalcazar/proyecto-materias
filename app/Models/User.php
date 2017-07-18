<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Clase que representa un Usuario, extiende de GenericModel.
 */
class User extends GenericModel
{
    // nombre de la tabla a la que corresponde el modelo.
    protected $table = 'users';

    /**
    * Defino la cardinalidad en la base de datos, usuarios tiene vinculacion a
    * una tabla intermedia 'roles de usuario'.
    */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_user', 'user_id', 'role_id');
    }

    /**
     * Busca a un usuario por su nombre.
     * @param  [type] $query instancia provista por el modelo para ejecutar consultas.
     * @param  [String] $name  nombre del usuario a buscar.
     * @return [Object] el usuario encontrado, u objecto vacio en otro caso.
     */
    public function scopeFindByName($query, $name)
    {
        return $query->where('name', $name)->first();
    }

    /**
     * Busca a un usuario por su apellido.
     * @param  [type]  $query instancia provista por el modelo para ejecutar consultas.
     * @param  [String] $surname apellido del usuario a buscar
     * @return [Object] el usuario encontrado, u objecto vacio en otro caso.
     */
    public function scopeFindBySurname($query, $surname)
    {
        return $query->where('surname', $surname)->first();
    }

    /**
     * Busca a un usuario por su email.
     * @param  [type]  $query instancia provista por el modelo para ejecutar consultas.
     * @param  [String] $surname email del usuario a buscar
     * @return [Object] el usuario encontrado, u objecto vacio en otro caso.
     */
    public function scopeFindByEmail($query, $email)
    {
        return $query->where('email', $email)->first();
    }

    /**
     * Verifica si una cuenta de usuario esta activa utilizando su email.
     * @param  [type] $query instancia provista por el modelo para ejecutar consultas.
     * @param  [String] $email email del usuario a consultar.
     * @return [Boolean] TRUE si la cuenta esta activa, FALSE en caso contrario.
     */
    public function scopeAccountActive($query, $email)
    {
        $user =  $query->where('email', $email)->select('account_active')->first();
        return ($user->account_active > 0);
    }

}

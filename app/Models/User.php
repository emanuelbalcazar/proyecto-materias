<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Clase que representa un Usuario, extiende de GenericModel.
 */
class User extends GenericModel
{
    // override table name
    protected $table = 'users';


}

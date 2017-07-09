<?php

namespace App\Services;

use DB;
use App\Models\User;

/**
 * Servicio asociado a usuarios, interactua con el modelo Eloquent correspondiente
 * al modelo User.
 */
class UserService extends GenericServiceImple
{
    /**
     * Retorna una nueva instancia del modelo User.
     * @return [Eloquent Model]
     */
    public function getModel()
    {
        return new User;
    }

}

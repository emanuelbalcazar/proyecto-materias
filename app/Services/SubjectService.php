<?php

namespace App\Services;

use DB;
use App\Models\Subject;

/**
 * Servicio asociado a materias, interactua con el modelo Eloquent correspondiente
 * al modelo Suject.
 */
class SubjectService extends GenericServiceImple
{
    /**
     * Retorna una nueva instancia del modelo Subject.
     * @return [Eloquent Model]
     */
    public function getModel()
    {
        return new Subject;
    }

    /**
     * Retorna todas las materias registradas.
     * @return [Array] materias de estudio.
     */
    public function all()
    {
        return Subject::all();
    }

}

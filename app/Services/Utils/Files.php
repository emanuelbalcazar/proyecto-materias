<?php

namespace App\Services\Utils;

use App\Services\Utils\Csvimport;
use DB;

/**
 * Servicio de utilidad para cargar datos a la base de datos desde un archivo
 * utilizando un modelo Eloquent para realizar la creacion de los registros.
 * Se le debe indicar el nombre del archivo y el modelo a utilizar.
 */
class Files
{
    protected $model;
    protected $data;
    protected $csvimport;

    /**
     * Instancio la libreria necesaria para leer los archivos .CSV en el constructor.
     */
    public function __construct()
    {
        $this->csvimport = new Csvimport;
    }

    /**
     * Setea el nombre del archivo a leer.
     * @param [String] $filename nombre del archivo a leer mas su extension (csv).
     */
    public function setFileName($filename)
    {
        $basePath = base_path();
        $this->data = $this->csvimport->get_array("{$basePath}/database/seeds/files/{$filename}");
    }

    /**
     * Setea el modelo a utilizar para persistir los datos.
     * @param [Eloquent] $model instancia de modelo Eloquent.
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Inicia la carga del archivo en la base de datos, el modelo permite que los
     * datos se persistan en la tabla correspondiente.
     */
    public function load()
    {
        foreach ($this->data as $row) {
            $this->model::create($row);
        }
    }
}

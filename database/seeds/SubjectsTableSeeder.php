<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('subjects.csv');
        $loader->setModel(new Subject);
        $loader->load();
        Log::info('SubjectsTableSeeder', ['La carga de archivos de Materias se realizo correctamente']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\University;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('universities.csv');
        $loader->setModel(new University);
        $loader->load();
        Log::info('UniversitiesTableSeeder', ['La carga de archivos de Universidades se realizo correctamente']);
    }
}

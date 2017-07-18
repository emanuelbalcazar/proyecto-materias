<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\Career;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('careers.csv');
        $loader->setModel(new Career);
        $loader->load();
        Log::info('CareersTableSeeder', ['La carga de archivos de Carreras se realizo correctamente']);
    }
}

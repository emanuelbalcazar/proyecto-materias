<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('cities.csv');
        $loader->setModel(new City);
        $loader->load();
        Log::info('CitiesTableSeeder', ['La carga de archivos de Ciudades se realizo correctamente']);
    }
}

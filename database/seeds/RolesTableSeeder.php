<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('roles.csv');
        $loader->setModel(new Role);
        $loader->load();
        Log::info('RolesTableSeeder', ['La carga de archivos de Roles se realizo correctamente']);
    }
}

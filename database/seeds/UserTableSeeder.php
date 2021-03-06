<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Services\Utils\Files;
use App\Models\User;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loader = new Files();
        $loader->setFileName('users.csv');
        $loader->setModel(new User);
        $loader->load();
        Log::info('UserTableSeeder', ['La carga de archivos de Usuarios se realizo correctamente']);
    }
}

<?php

use Illuminate\Database\Seeder;
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
        echo "La carga del archivo de usuarios finalizo correctamente";
    }
}

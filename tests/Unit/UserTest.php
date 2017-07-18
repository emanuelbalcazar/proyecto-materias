<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\User;
use DB;

class UserTest extends TestCase
{

    /**
     * SetUp test
     * Se ejecuta antes de iniciar los test, le indica a la base de datos que
     * iniciara una transaccion permitiendo tener control sobre los cambios.
     */
    public function setUp()
    {
        parent::setUp();
        $this->createApplication();
        DB::beginTransaction();
        $this->inicialize();
    }

    /**
     * Se ejecuta una vez finalizado los test, realiza un rollBack sobre la
     * base de datos para eliminar las modificaciones que se hayan realizado.
     */
    public function tearDown() {
        parent::tearDown();
        DB::rollBack();
    }

    /**
     * Defino los datos a utilizar durante el test unitario.
     * Recordar que los test deben poder ejecutarse en cualquier contexto sin
     * necesidad de tener datos pre cargados en la base de datos.
     */
    private function inicialize()
    {
        $user = new User;
        $user->name = "Carlos";
        $user->surname = "Aldana";
        $user->email = "carlosaldana@gmail.com";
        $user->password = "12345678";
        $user->account_active = 1;
        $user->save();
    }

    /**
     * Testea la busqueda de un usuario por nombre.
     * @return void
     */
    public function testFindByName()
    {
        $user = User::findByName("Carlos");
        $this->assertTrue($user->surname == "Aldana");
    }

    /**
     * Testea la busqueda de un usuario por apellido.
     * @return void
     */
    public function testFindBySurname()
    {
        $user = User::findBySurname("Aldana");
        $this->assertTrue($user->name == "Carlos");
    }

    /**
     * Testea la busqueda de un usuario por su email.
     * @return void
     */
    public function testFindByEmail()
    {
        $user = User::findByEmail("carlosaldana@gmail.com");
        $this->assertTrue($user->name == "Carlos");
    }

    /**
     * Testea si la cuenta de un usuario esta activa.
     * @return void
     */
    public function testAccountActive()
    {
        $active = User::accountActive("carlosaldana@gmail.com");
        $this->assertTrue($active);
    }
}

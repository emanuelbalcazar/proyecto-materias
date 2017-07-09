<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Tests para el servicio de usuarios.
 */
class UserServiceTest extends TestCase
{
    protected $userService;

    /**
     * SetUp test
     */
    public function setUp()
    {
        parent::setUp();
        $this->createApplication();
        $this->userService = $this->app->make('App\Services\UserService');
    }

    /**
     * Verifica que el nombre de la tabla de usuarios sea la correcta.
     * @return void
     */
    public function testTableName()
    {
        $user = $this->userService->getModel();
        $this->assertTrue($user->getTable() === "users");
    }
}

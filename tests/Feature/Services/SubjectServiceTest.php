<?php

namespace Tests\Feature\Services;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Tests para el servicio de materias.
 */
class SubjectServiceTest extends TestCase
{
    protected $subjectService;

    /**
     * SetUp test
     */
    public function setUp()
    {
       parent::setUp();
       $this->createApplication();
       $this->subjectService = $this->app->make('App\Services\SubjectService');
    }

    /**
    * Verifica que el nombre de la tabla de materias sea la correcta.
    * @return void
    */
    public function testTableName()
    {
       $subject = $this->subjectService->getModel();
       $this->assertTrue($subject->getTable() === "subjects");
    }
}

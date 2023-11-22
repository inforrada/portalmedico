<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);


    }
    public function test_funcional () :void 
    {
        $resultado = $this->test_example();
        $resultado2 = ExampleTest::test_the_application_returns_a_successful_response ();
    } 
}

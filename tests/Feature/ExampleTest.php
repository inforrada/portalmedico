<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public static function test_the_application_returns_a_successful_response(): void
    {
        $response = self::get('/');

        $response->assertStatus(200);
    }
}

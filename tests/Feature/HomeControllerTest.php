<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public static function sumarDataProvider ()  {
        return [
            [2, 3, 5], 
            [4, 6, 10], 
            [0, 5, 5], 
            [-3, 7, 4]
        ];
    }

    /**
     * @dataProvider sumarDataProvider
     */
    public function testSumarController($a, $b, $resultado): void
    {
        $response = $this->get("/suma/$a/$b");

        $response->assertJson(['result' => $resultado])->assertStatus(200);
    }

}

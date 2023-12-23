<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_return_a_list_of_articles()
    {
        $response = $this->get('/api/articles');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'title', 'description', 'published_on']
        ]);
    }
}

<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    
    /**
    * @test
    */
    public function the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }

    /**
    * @test
    */
    public function a_user_can_viste_home_page(): void
    {
        $user - User::factory()->create();

        $response = $this->actingAs($user)->get('');

        $response->assertStatus(200);
    }
}

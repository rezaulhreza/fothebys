<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_application_page_for_user_is_rendered()
    {
        $this->actingAs($user = User::factory()->create());
        $response = $this->get('/application');

        $response->assertStatus(200);
    }
}

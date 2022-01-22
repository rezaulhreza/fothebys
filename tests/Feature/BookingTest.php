<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_booking_page_is_displayed()
    {
        $this->actingAs($user = User::factory()->create());

        $response = $this->get('/booking');

        $response->assertStatus(200);
    }

    
}

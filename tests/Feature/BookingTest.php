<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_booking_page_is_displayed()
    {
        $response = $this->get('/booking');

        $response->assertStatus(200);
    }
}

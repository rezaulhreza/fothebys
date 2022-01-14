<?php

namespace Tests\Unit\Models;

use App\Models\Booking;
use Tests\TestCase;

/**
 * Class BookingTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Models\Booking
 */
class BookingTest extends TestCase
{
    /**
     * @var Booking
     */
    protected $booking;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->booking = new Booking();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->booking);
    }

    public function testUser(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

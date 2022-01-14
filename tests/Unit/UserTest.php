<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Tests\TestCase;

/**
 * Class UserTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Models\User
 */
class UserTest extends TestCase
{
    /**
     * @var User
     */
    protected $user;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->user = new User();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->user);
    }

    public function testBookings(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testBids(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testApplications(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

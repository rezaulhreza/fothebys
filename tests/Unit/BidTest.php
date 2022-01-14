<?php

namespace Tests\Unit\Models;

use App\Models\Bid;
use Tests\TestCase;

/**
 * Class BidTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Models\Bid
 */
class BidTest extends TestCase
{
    /**
     * @var Bid
     */
    protected $bid;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->bid = new Bid();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->bid);
    }

    public function testUser(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testLot(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

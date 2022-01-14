<?php

namespace Tests\Unit\Models;

use App\Models\LotItem;
use Tests\TestCase;

/**
 * Class LotItemTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Models\LotItem
 */
class LotItemTest extends TestCase
{
    /**
     * @var LotItem
     */
    protected $lotItem;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->lotItem = new LotItem();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->lotItem);
    }

    public function testCategory(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testImages(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testBids(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testUser(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

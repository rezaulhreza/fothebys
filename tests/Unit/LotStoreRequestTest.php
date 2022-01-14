<?php

namespace Tests\Unit\Http\Requests;

use App\Http\Requests\LotStoreRequest;
use Tests\TestCase;

/**
 * Class LotStoreRequestTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Http\Requests\LotStoreRequest
 */
class LotStoreRequestTest extends TestCase
{
    /**
     * @var LotStoreRequest
     */
    protected $lotStoreRequest;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->lotStoreRequest = new LotStoreRequest();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->lotStoreRequest);
    }

    public function testAuthorize(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }

    public function testRules(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use Tests\TestCase;

/**
 * Class CategoryTest.
 *
 * @author Rezaul H Reza
 *
 * @covers \App\Models\Category
 */
class CategoryTest extends TestCase
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->category = new Category();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->category);
    }

    public function testLots(): void
    {
        /** @todo This test is incomplete. */
        $this->markTestIncomplete();
    }
}

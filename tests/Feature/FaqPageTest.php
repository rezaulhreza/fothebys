<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FaqPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_faq_for_admin_is_rendered()
    {
        $this->actingAs($user = User::factory()->create());
        $response = $this->get('admin/faqs/create');

        $response->assertStatus(200);
    }

    public function test_admin_can_add_faqs()
    {
       
        $this->actingAs($user = User::factory()->create());
        $response = $this->post('/admin/faqs/store', [
            'question' => 'Test Question is ok? yes',
            'answer' => 'Test answer is always good',
            
        ]);
    
        $response->assertStatus(200);
        
    }
}

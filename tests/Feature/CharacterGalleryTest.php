<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterGalleryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_gallery()
    {
        $this->seed();
        $response = $this->post('charactergallery?book_id=1');
        $response->assertSeeText('Characters from Harry Potter and the Philosopher\'s Stone');
    }
}

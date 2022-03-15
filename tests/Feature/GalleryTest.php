<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GalleryTest extends TestCase
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
        $response = $this->post('gallery');
        $response->assertSeeText('Harry Potter');
        $response->assertSeeText('Lord of the Rings');
    }
}

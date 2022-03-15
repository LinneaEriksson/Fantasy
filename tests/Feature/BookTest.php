<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_book()
    {
        $this->seed();
        $response = $this->post('book?id=1');
        $response->assertStatus(200);
    }
}

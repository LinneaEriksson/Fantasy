<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_index()
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertSeeText('Who are you?');
        $response->assertStatus(200);
    }
}

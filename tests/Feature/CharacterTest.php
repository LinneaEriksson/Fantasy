<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_character()
    {

        $this->seed();
        $response = $this->post('character?book_id=1', ['secret' => 'alohomora', 'answer' => 'Bravery']);

        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    public function test_view_book()
    {

        $response = $this->call('POST', '/book', array(
            '_token' => csrf_token(),
        ));
        $response->assertStatus(200);

        // $this->followRedirects('/book');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_createPersonSafe()
    {
        $response = $this->Json('POST', '/persons', ['username'=>'Nes', 'email'=>'nes@gmail.com']);

        $response
            ->assertStatus(200)
            ->assertJson(['status'=>'successful']);
    }

    public function test_getAllPersonSafe()
    {
        $response = $this->get('/persons');

        $response
            ->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_validation_register_new_manager()
    {
        $response = $this->postJson('/api/auth/register');

        $response->assertStatus(422);
    }

    public function test_success_register_new_manager()
    {
        $response = $this->postJson('/api/auth/register',[
            'name' => 'Joao',
            'email' => 'joao@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456',
            'level' => 1 
        ]);

        $response->assertStatus(200);
    }

    public function test_validation_login_manager()
    {
        $response = $this->postJson('/api/auth/login');

        $response->assertStatus(422);
    }

    public function test_success_login_manager()
    {

        $response = $this->postJson('/api/auth/register',[
            'name' => 'Joao',
            'email' => 'joao@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456',
            'level' => 1 
        ]);

        $response = $this->postJson('/api/auth/login',[
            'email' =>   'joao@gmail.com',
            'password' => '123456'
        ]);

        $response->assertStatus(201);
    }
}

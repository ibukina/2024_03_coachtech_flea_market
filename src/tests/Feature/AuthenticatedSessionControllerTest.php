<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

class AuthenticatedSessionControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Artisan::call('db:seed');
    }

    public function testIndex()
    {
        $response = $this->get('/login');

        $response->assertStatus(200)
            ->assertViewIs('login');
    }

    public function testCreate()
    {
        $user = User::create([
            'role_id' => '10',
            'name' => 'new user',
            'email' => 'testing@example.com',
            'password' => bcrypt($password = 'password-laravel'),
        ]);

        $response = $this->post('/login', [
            'role_id' => '10',
            'name' => 'new user',
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    public function testDestroy()
    {
        $user = User::find(3);

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('/login');
        // ユーザーがログアウト状態であることを確認
        $this->assertGuest();
    }
}

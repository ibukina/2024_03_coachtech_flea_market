<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Artisan;

class ItemControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // シーディング
        Artisan::call('db:seed');
    }

    public function testIndex()
    {
        $user = User::find(3);
        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200);
    }

    public function testDetail()
    {
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->get('/item/' . $item->id);

        $response->assertStatus(200);
    }
}

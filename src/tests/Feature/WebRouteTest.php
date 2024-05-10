<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Artisan;

class WebRouteTest extends TestCase
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

    public function testLogoutRoute()
    {
        $user = User::find(3);

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('login');

        $this->assertGuest();
    }

    public function testCommentViewRoute()
    {
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->get("/item/comment/{$item->id}");

        $response->assertStatus(200);
    }

    public function testCommentCreateRoute()
    {
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->post("/item/comment/{$item->id}",[
            'user_id'=>$user->id,
            'item_id'=>$item->id,
            'comment'=>'Test Comment',
        ]);

        $response->assertStatus(302);
    }

    public function testGateMerchantRoute()
    {
        $user = User::find(2);

        $response = $this->actingAs($user)->get("/merchant");

        $response->assertStatus(200);
    }

    public function testGateAdminRoute()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get("/admin");

        $response->assertStatus(200);
    }
}

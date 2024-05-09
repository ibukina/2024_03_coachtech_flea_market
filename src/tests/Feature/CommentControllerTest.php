<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Facades\Artisan;

class CommentControllerTest extends TestCase
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
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->get("/item/comment/{$item->id}");

        $item = Item::find($item->id);
        $comments = Comment::where('item_id', $item->id)->get();
        $liked = Like::where('user_id', $user->id)->where('item_id', $item->id)->get();
        $likes = $liked->keyBy('item_id');

        $response->assertStatus(200)
            ->assertViewIs('comment')
            ->assertViewHasAll(['item', 'comments', 'liked', 'likes']);
    }

    public function testCreate()
    {
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->post("/item/comment/{$item->id}", [
            'user_id' => $user->id,
            'item_id' => $item->id,
            'comment' => 'test comment',
        ]);

        $response->assertRedirect("/item/comment/{$item->id}");
    }

    public function testDestroy()
    {
        $user = User::find(4);
        $item = Item::find(1);
        $comment = Comment::find(1);

        $response = $this->actingAs($user)->post("/item/comment/delete/{$comment->id}/{$item->id}");

        $response->assertRedirect("/item/comment/{$item->id}");
    }
}

<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Comment;
use Illuminate\Support\Facades\Artisan;

class CommentTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Artisan::call('db:seed');
    }

    public function testCommentBelongsToUser()
    {
        $comment = Comment::find(1);

        $this->assertTrue($comment->user->name === '名前');
    }

    public function testCommentBelongsToItem()
    {
        $comment = Comment::find(1);

        $this->assertTrue($comment->item->name === '商品名');
    }
}

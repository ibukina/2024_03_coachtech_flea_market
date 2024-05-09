<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Like;
use Illuminate\Support\Facades\Artisan;

class LikeTest extends TestCase
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

    public function testLikeBelongsToUser()
    {
        $like = Like::find(1);

        $this->assertTrue($like->user->name === '名前');
    }

    public function testLikeBelongsToItem()
    {
        $like = Like::find(1);

        $this->assertTrue($like->item->name === '商品名');
    }
}

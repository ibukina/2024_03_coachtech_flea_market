<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\SoldItem;
use Illuminate\Support\Facades\Artisan;

class SoldItemTest extends TestCase
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

    public function testSoldItemBelongsToUser()
    {
        $soldItem = SoldItem::find(1);

        $this->assertTrue($soldItem->user->name === 'ユーザー名');
    }

    public function testSoldItemBelongsToItem()
    {
        $soldItem = SoldItem::find(1);

        $this->assertTrue($soldItem->item->name === '商品名');
    }
}

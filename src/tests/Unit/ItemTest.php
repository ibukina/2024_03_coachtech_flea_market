<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Item;
use Illuminate\Support\Facades\Artisan;

class ItemTest extends TestCase
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

    public function testItemBelongsToUser()
    {
        $item = Item::find(1);

        $this->assertTrue($item->user->name === 'ユーザー名');
    }

    public function testItemBelongsToCondition()
    {
        $item = Item::find(1);

        $this->assertTrue($item->condition->condition === '良好');
    }

    public function testItemBelongsToManyCategories()
    {
        
    }
}

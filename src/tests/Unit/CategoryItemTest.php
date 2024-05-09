<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\CategoryItem;
use Illuminate\Support\Facades\Artisan;

class CategoryItemTest extends TestCase
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

    public function testCategoryItemBelongsToItem()
    {
        $categoryItem = CategoryItem::find(1);

        $this->assertTrue($categoryItem->item->name === '商品名');
    }

    public function testCategoryItemBelongsToCategory()
    {
        $categoryItem = CategoryItem::find(1);

        $this->assertTrue($categoryItem->category->category === '洋服');
    }
}

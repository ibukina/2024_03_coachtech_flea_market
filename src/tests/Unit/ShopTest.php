<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Shop;
use Illuminate\Support\Facades\Artisan;

class ShopTest extends TestCase
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

    public function testShopBelongsToUser()
    {
        $shop = Shop::find(1);

        $this->assertTrue($shop->user->name === '店舗代表者');
    }

    public function testShopBelongsToArea()
    {
        $shop = Shop::find(1);

        $this->assertTrue($shop->area->area === '東京都');
    }

    public function testShopBelongsToGenre()
    {
        $shop = Shop::find(1);

        $this->assertTrue($shop->genre->genre === 'カジュアル');
    }
}

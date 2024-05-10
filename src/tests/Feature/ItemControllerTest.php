<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Condition;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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
        $items = Item::all();

        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200)
            ->assertViewIs('item_all')
            ->assertViewHas('items', function($items){
                return $items->first()->name === $items->first()->name;
            });
    }

    public function testDetail()
    {
        $user = User::find(3);
        $item = Item::find(1);

        $response = $this->actingAs($user)->get("/item/{$item->id}");

        $response->assertStatus(200);
    }

    public function testSearch()
    {
        $user = User::find(3);
        $items = Item::find(1);

        $response = $this->post('/item/search');

        $response->assertStatus(200)
            ->assertViewIs('item_all')
            ->assertViewHas('items', function($items) {
                return $items->first()->name === '商品名';
            });
    }

    public function testSellView()
    {
        $user = User::find(3);
        $conditions = Condition::all();
        $categories = Category::all();

        $response = $this->actingAs($user)->get('/sell');

        $response->assertStatus(200)
            ->assertViewIs('sell')
            ->assertViewHasAll(['conditions', 'categories']);
    }

    public function testSellCreate()
    {
        Storage::fake('public');

        $user = User::find(3);
        $condition = Condition::find(1);
        $category = Category::find(1);
        $file = UploadedFile::fake()->image('item.jpg');
        $filename = $file->hashName();
        $read_path = 'image/' . $filename;

        $response = $this->actingAs($user)->post('/sell', [
            'store_image' => $file,
            'condition_id' => $condition->id,
            'name' => 'Test Item',
            'price' => 1000,
            'description' => 'Test Description more than 20',
            'img_url' => $read_path,
            'category_id' => [$category->id],
        ]);

        $response->assertRedirect('/');
    }
}

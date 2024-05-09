<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Staff;
use Illuminate\Support\Facades\Artisan;

class StaffTest extends TestCase
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

    public function testStaffBelongsToUser()
    {
        $staff = Staff::find(1);

        $this->assertTrue($staff->user->name === 'ショップスタッフその１');
    }

    public function testStaffBelongsToShop()
    {
        $staff = Staff::find(1);

        $this->assertTrue($staff->shop->name === 'ブランド名');
    }
}

<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Profile;
use Illuminate\Support\Facades\Artisan;

class ProfileTest extends TestCase
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

    public function testProfileBelongsToUser()
    {
        $profile = Profile::find(1);

        $this->assertTrue($profile->user->name === 'ユーザー名');
    }
}

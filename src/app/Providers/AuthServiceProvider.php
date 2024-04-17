<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // 管理者のみ許可
        Gate::define('admin-only', function ($user) {
            return ($user->role->id == 1);
        });
        // 店舗代表者のみ許可
        Gate::define('merchant-only', function($user){
            return ($user->role->id == 5);
        });
        // 一般ユーザーのみ許可
        Gate::define('user-only', function($user){
            return ($user->role->id == 10);
        });
        // 一般ユーザー以上に許可
        Gate::define('user-higher', function ($user) {
            return ($user->role->id <= 10);
        });
        // 管理者以外許可
        Gate::define('admin-except', function($user){
            return ($user->role->id != 1);
        });
    }
}

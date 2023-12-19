<?php

namespace App\Providers;

 use App\Models\User;
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
        Gate::define('is_admin' , function (User $user) {
            return $user->type == 'admin' ? true : false;
        });

        Gate::define('is_coach' , function (User $user) {
            return $user->type == 'coach' ? true : false;
        });
    }
}

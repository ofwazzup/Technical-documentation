<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\article;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function (User $user) {
            return true;
        });

        Gate::define('delete-post', function (User $user) {
            return false;
        });

        Gate::define('ArticleEdit', function (User $user, $id) {
            return $user->id === DB::table('articles')->find($id)->id_user;
        });
        //
        /*
        Gate::before(function ($user) {
            return true;
        });
        */
    }
}

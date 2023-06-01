<?php

namespace App\Providers;

use App\Models\Auto;
use App\Policies\AutoPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Resources\Json\JsonResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    protected $policies = [
        Auto::class => AutoPolicy::class,
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();

        //
        Gate::define('show', function (User $user) {
            return $user->role === 'superAdmin';
        });
    }
}

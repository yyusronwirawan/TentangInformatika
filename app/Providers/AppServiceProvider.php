<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();

        // Gate::define('admin', fn (User $user) =>  $user->role_id == 1); // admin
        // Gate::define('operator', fn (User $user) =>   $user->role_id == 2); // pengurus
        Gate::define('registrants', fn (User $user) => $user->whereDoesntHave('roles')); // pendaftar
    }
}

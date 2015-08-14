<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Users\UserRepository', 'App\Users\EloquentUserRepository');
        $this->app->bind('App\Events\EventRepository', 'App\Events\EloquentEventRepository');
    }
}

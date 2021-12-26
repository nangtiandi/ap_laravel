<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Test;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('test',function (){
            return new Test();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

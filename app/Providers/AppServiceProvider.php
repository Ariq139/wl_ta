<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* tambahan kode, import Schema */
use Illuminate\Support\Facades\Schema;
/**/

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* tambahan kode, menentukan panjang string*/
        Schema::defaultStringLength(191);
        /**/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

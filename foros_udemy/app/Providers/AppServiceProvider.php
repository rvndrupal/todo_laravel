<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;

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
        //se Crea el nuevo provider de la aplicacion para validar si estas logueado
        \Blade::if('Logged', function(){
            return  auth()->check();  //verifica si el usuario esta logueado
        });

    }
}

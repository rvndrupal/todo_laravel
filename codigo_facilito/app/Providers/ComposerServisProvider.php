<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServisProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //aqui se carga toda la información que se encarga de Enviar la Info a la Vista
        //se le pasa para las dos vistas o mas que necesites
        View::composer(['images.index'],'App\Http\ViewComposers\CatTagComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

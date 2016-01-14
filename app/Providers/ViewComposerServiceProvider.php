<?php

namespace MamaManzana\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory;
use MamaManzana\Composers\UserComposer;
use MamaManzana\Composers\SettingComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Factory $factory)
    {
        $factory->composer('Site.layout.header',UserComposer::class);
        $factory->composer('Site.pages.contacto',UserComposer::class);
        $factory->composer('Site.layout.template',SettingComposer::class);
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

<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        /*View::composer('*', function ($view) {
            $view->with('menus', \App\Models\AtmPage::all());
        });*/
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('partials.header', function ($view) {
            $settings = \App\settings::find('1');
            $categories = explode(',', $settings->categories);
            $view->with('categories', $categories);
        });
        View::composer('partials.admin-sidebar', function ($view) {
            $approve_count = \App\Accomodations::where('active', '0')->count();
            $unpaid_count = \App\Bills::where('paid', '0')->count();
            $view->with('approve_count', $approve_count)->with('unpaid_count', $unpaid_count);
        });
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

<?php

namespace App\Providers;

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
         view()->composer('frontend.blog.side', function ($view) {
            $kategoris = \App\Kategori::all();
            // $category = \App\Category::all();
            $recent = \App\Program::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategoris', 'recent'));
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

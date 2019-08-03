<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Detail;
use App\Model\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $allcategorys = Category::all();
        $categorys = Category::with(array('detail' => function($query)
        {
             $query->where('active', 1);
        }))->get();
        $newcategorys = Detail::where('active', 1)->orderBy('id', 'desc')->limit(3)->get();
        view()->share('allcategorys', $allcategorys);
        view()->share('categorys', $categorys);
        view()->share('newcategorys', $newcategorys);
    }
}

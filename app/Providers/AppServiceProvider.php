<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductsCategory;
use App\Category;

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
        //
        $category = Category::all();
        $product_category = ProductsCategory::all();
            view()->share('serviceCat', $category);
            view()->share('productCat', $product_category);
    }
}

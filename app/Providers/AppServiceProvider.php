<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProducts;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view() -> composer('header', function($view){
            $type_product = TypeProducts::all();
            $view -> with('type_product', $type_product);           
        });

        view() -> composer('*', function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view -> with(['cart' => Session::get('cart'), 'product_cart' => $cart -> items, 'totalPrice' => $cart -> totalPrice, 'totalQty' => $cart -> totalQty]);
            }
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

<?php
namespace App\Providers;
use Illuminate\Support\Facades\View;  //view facade use krne ke liye, view ko globally share krne ke liye, har view m use kr skte hai, key is the name of variable and value is the value of variable.
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot(): void
    {
        view::share('class','10th'); //global variable, har view m use kr skte hai, key is the name of variable and value is the value of variable.
        //jo sbme common ho,use yha declafre krke wha access krlo .BEST
    }
}

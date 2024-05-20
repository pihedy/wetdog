<?php declare(strict_types=1);

namespace App\Providers\Views;

use \Illuminate\Support\ServiceProvider;

use \Illuminate\Support\Facades\View;

use \Illuminate\View\View as IlluminateView;

class HeadComponentProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /* Do Nothing. */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('includes.head', function (IlluminateView $View) {
            $View->with('assets', config('head-component.assests'));
        });
    }
}

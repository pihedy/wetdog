<?php declare(strict_types=1);

namespace App\Providers\Views;

use \Illuminate\Support\ServiceProvider;

use \Illuminate\Support\Facades\View;

use \Illuminate\View\View as IlluminateView;

use \App\Components\Integration\Gravatar;

/**
 * Provides a service provider for the navbar component in the application.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class NavbarComponentProvider extends ServiceProvider
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
        View::composer('components.navbar', function (IlluminateView $View) {
            $data = array_merge(config('navbar-component', []), [
                'current'   => request()->route()->getName(),
                'user'      => [
                    'name'      => auth()->user()->name,
                    'email'     => auth()->user()->email,
                    'avatar'    => Gravatar::url(auth()->user()->email),
                ]
            ]);

            $View->with('data', $data);
        });
    }
}

<?php declare(strict_types=1);

namespace App\Providers;

use \Illuminate\Support\ServiceProvider;
use \Laravel\Sanctum\ {Sanctum, PersonalAccessToken};

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class AppServiceProvider extends ServiceProvider
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
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}

<?php declare(strict_types=1);

namespace App\Providers;

use \Illuminate\Support\ServiceProvider;

use \Illuminate\Support\Facades\Event;

/**
 * Provides event handling services for the application.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class EventServiceProvider extends ServiceProvider
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
        /**
         * Extends the Socialite service to include the Twitch and other provider.
         */
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $Event) {
            $Event->extendSocialite('twitch', \SocialiteProviders\Twitch\Provider::class);
        });
    }
}

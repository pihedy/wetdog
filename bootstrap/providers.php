<?php declare(strict_types=1);

/**
 * Registers the application service providers.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */

return [
    \App\Providers\AppServiceProvider::class,
    \App\Providers\EventServiceProvider::class,
    \App\Providers\Views\NavbarComponentProvider::class,
    \App\Providers\Views\HeadComponentProvider::class,
];

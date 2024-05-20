<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

use \Illuminate\Foundation\Application;
use \Illuminate\Foundation\Configuration\ {Exceptions, Middleware};

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: base_path('routes/web.php'),
        api: base_path('routes/api.php'),
        commands: base_path('routes/console.php')
    )->withMiddleware(function (Middleware $Middleware) {
        /* Do nothing. */
    })->withExceptions(function (Exceptions $Exceptions) {
        /* Do nothing. */
    })->create();

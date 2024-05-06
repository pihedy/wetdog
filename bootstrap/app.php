<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

use \Illuminate\Foundation\Application;
use \Illuminate\Foundation\Configuration\ {Exceptions, Middleware};

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php'
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

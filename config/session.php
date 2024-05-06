<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

use \Illuminate\Support\Str;

return [
    /**
     * Default Session Driver
     */
    'driver' => env('SESSION_DRIVER', 'database'),

    /**
     * Session Lifetime
     */
    'lifetime' => env('SESSION_LIFETIME', 120),

    /**
     * Determines whether the session should expire when the browser is closed.
     */
    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /**
     * Session Encryption
     */
    'encrypt' => env('SESSION_ENCRYPT', false),

    /**
     * Session File Location
     */
    'files' => storage_path('framework/sessions'),

    /**
     * Session Database Connection
     */
    'connection' => env('SESSION_CONNECTION'),

    /**
     * Session Database Table
     */
    'table' => env('SESSION_TABLE', 'sessions'),

    /**
     * Session Cache Store
     */
    'store' => env('SESSION_STORE'),

    /**
     * Session Sweeping Lottery
     */
    'lottery' => [2, 100],

    /**
     * Session Cookie Name
     */
    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'goatwatch'), '_').'_session'
    ),

    /**
     * Session Cookie Path
     */
    'path' => env('SESSION_PATH', '/'),

    /**
     * Session Cookie Domain
     */
    'domain' => env('SESSION_DOMAIN'),

    /**
     * HTTPS Only Cookies
     */
    'secure' => env('SESSION_SECURE_COOKIE'),

    /**
     * HTTP Access Only
     */
    'http_only' => env('SESSION_HTTP_ONLY', true),

    /**
     * Same-Site Cookies
     */
    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /**
     * Partitioned Cookies
     */
    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false)
];

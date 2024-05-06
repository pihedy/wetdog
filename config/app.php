<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

return [
    /**
     * Application Name
     */
    'name' => env('APP_NAME', 'WetDog'),

    /**
     * Application Environment
     */
    'env' => env('APP_ENV', 'production'),

    /**
     * Application Debug Mode
     */
    'debug' => (bool) env('APP_DEBUG', false),

    /**
     * Application URL
     */
    'url' => env('APP_URL', 'http://localhost'),

    /**
     * Application Timezone
     */
    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /**
     * Application Locale Configuration
     */
    'locale' => env('APP_LOCALE', 'en'),

    /**
     * The fallback locale to use if the requested locale is not available.
     */
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    /**
     * The locale to use for generating fake data.
     */
    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /**
     * Encryption Key
     */
    'cipher' => 'AES-256-CBC',

    /**
     * The application key used for encrypting data.
     */
    'key' => env('APP_KEY'),

    /**
     * An array of previous API keys that are allowed to be used.
     */
    'previous_keys' => [
        ...array_filter(explode(',', env('APP_PREVIOUS_KEYS', ''))),
    ],

    /**
     * Maintenance Mode Driver
     */
    'maintenance' => [
        'driver'    => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store'     => env('APP_MAINTENANCE_STORE', 'database'),
    ],
];

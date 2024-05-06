<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

use \Illuminate\Support\Str;

return [
    /**
     * Default Cache Store
     */
    'default' => env('CACHE_STORE', 'database'),

    /**
     * Cache Stores
     */
    'stores' => [

        'array' => [
            'driver'    => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver'            => 'database',
            'table'             => env('DB_CACHE_TABLE', 'cache'),
            'connection'        => env('DB_CACHE_CONNECTION'),
            'lock_connection'   => env('DB_CACHE_LOCK_CONNECTION'),
        ],

        'file' => [
            'driver'    => 'file',
            'path'      => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver'        => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl'          => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [],
            'servers' => [
                [
                    'host'      => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port'      => env('MEMCACHED_PORT', 11211),
                    'weight'    => 100,
                ],
            ],
        ],

        'redis' => [
            'driver'            => 'redis',
            'connection'        => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection'   => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver'    => 'dynamodb',
            'key'       => env('AWS_ACCESS_KEY_ID'),
            'secret'    => env('AWS_SECRET_ACCESS_KEY'),
            'region'    => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table'     => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint'  => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

    ],

    /**
     * Cache Key Prefix
     */
    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'goatwatch'), '_').'_cache_'),
];

<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

return [
    /**
     * Third Party Services
     */
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'       => env('AWS_ACCESS_KEY_ID'),
        'secret'    => env('AWS_SECRET_ACCESS_KEY'),
        'region'    => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token'  => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel'               => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'twitch' => [
        'client_id'     => env('TWITCH_CLIENT_ID'),
        'client_secret' => env('TWITCH_CLIENT_SECRET'),
        'redirect'      => env('TWITCH_REDIRECT_URI')
    ],

];

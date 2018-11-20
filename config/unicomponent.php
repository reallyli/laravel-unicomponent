<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 下午2:06.
 */

return [
    'components' => [
        /*
        |--------------------------------------------------------------------------
        | Log Formatter
        |--------------------------------------------------------------------------
        |
        | Log formatting
        |
        */
        'log_formatter' => [
            'provider' => \Reallyli\LaravelUnicomponent\Components\LogFormatter\LogFormatterService::class,
            'configs' => []
        ],
        /*
        |--------------------------------------------------------------------------
        | Pusher
        |--------------------------------------------------------------------------
        |
        | Internal message push
        |
        */
        'pusher' => [
            'provider' => \Reallyli\LaravelUnicomponent\Components\Pusher\PusherService::class,
            'configs' => [
                'pusher_url' => env('UNICOMPONENT_PUSHER_URL'),
            ]
        ]
    ]
];

<?php
/**
 * Created by PhpStorm.
 * User: uniqueway
 * Date: 2018/11/20
 * Time: 上午11:38.
 */

namespace Reallyli\LaravelUnicomponent\Components\Pusher;

use Reallyli\LaravelUnicomponent\UnicomponentServiceInterface;

class PusherService implements UnicomponentServiceInterface
{
    public function alias()
    {
        return 'pusher';
    }

    public function provider()
    {
        return Pusher::class;
    }
}

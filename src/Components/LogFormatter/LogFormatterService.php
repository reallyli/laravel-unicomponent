<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午11:21
 */

namespace Reallyli\LaravelUnicomponent\Components\LogFormatter;

use Reallyli\LaravelUnicomponent\UnicomponentServiceInterface;

class LogFormatterService implements UnicomponentServiceInterface
{
    public function alias()
    {
        return 'logFormatter';
    }

    public function provider()
    {
        return LogFormatter::class;
    }
}
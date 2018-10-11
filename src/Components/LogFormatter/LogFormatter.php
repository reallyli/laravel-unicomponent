<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/10
 * Time: 下午4:45.
 */

namespace Reallyli\LaravelUnicomponent\Components\LogFormatter;

class LogFormatter
{
    /**
     * Customize the given logger instance.
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new JsonFormatter());
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午10:19.
 */

namespace Reallyli\LaravelUnicomponent\Components\LogFormatter;

interface FormatterInterface
{
    public function format(array $record);
}

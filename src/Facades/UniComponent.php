<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/10
 * Time: 下午4:34.
 */

namespace Reallyli\LaravelUnicomponent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Unicomponent.
 */
class UniComponent extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'unicomponent';
    }
}

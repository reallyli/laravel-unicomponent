<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午11:22.
 */

namespace Reallyli\LaravelUnicomponent;

interface UnicomponentServiceInterface
{
    /**
     * @return mixed
     */
    public function alias();

    /**
     * @return mixed
     */
    public function provider();
}

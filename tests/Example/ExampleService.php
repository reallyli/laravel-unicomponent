<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 下午2:47
 */

namespace Reallyli\LaravelUnicomponent\Tests\Example;

use Reallyli\LaravelUnicomponent\UnicomponentServiceInterface;

class ExampleService implements UnicomponentServiceInterface
{
    /**
     * Method description:alias
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param 
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function alias()
    {
        return 'example';
    }

    /**
     * Method description:provider
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param 
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function provider()
    {
        return Example::class;
    }
}
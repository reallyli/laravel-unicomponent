<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 下午2:39.
 */

namespace Reallyli\LaravelUnicomponent\Tests;

use PHPUnit\Framework\TestCase;
use Reallyli\LaravelUnicomponent\Components\Pusher\Pusher;
use Reallyli\LaravelUnicomponent\UnicomponentServiceManager;
use Reallyli\LaravelUnicomponent\Tests\Example\ExampleService;

class UnicomponentTest extends TestCase
{
    /**
     * Method description:Test Register Component.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function testRegisterComponent()
    {
        $unicomponentServiceManager = new UnicomponentServiceManager([]);

        $unicomponentServiceManager->registerComponent(new ExampleService());

        $this->assertEquals('test', $unicomponentServiceManager->example()->test());
    }

    /**
     * Method description:testConfigurationComponents.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function testConfigurationComponents()
    {
        $unicompoentConfig = include_once __DIR__.'/unicomponentConfig.php';
        $unicomponentServiceManager = new UnicomponentServiceManager($unicompoentConfig);

        $this->assertClassHasAttribute('test', get_class($unicomponentServiceManager->example()));
    }

    /**
     * Method description:Test Get Component.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function testGetComponent()
    {
        $unicompoentConfig = include_once __DIR__.'/../config/unicomponent.php';

        $unicomponentServiceManager = new UnicomponentServiceManager($unicompoentConfig);

        $this->assertInstanceOf(Pusher::class, $unicomponentServiceManager->pusher);
    }
}

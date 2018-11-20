<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午10:37.
 */

namespace Reallyli\LaravelUnicomponent;

class UnicomponentServiceManager
{
    /**
     * @var array
     */
    private $servicesComponents = [];

    /**
     * @var mixed
     */
    private $config;

    /**
     * Construct
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param mixed $config
     * @return void
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function __construct($config)
    {
        $this->config = $config;
        $this->registerDefaultComponent();
    }

    /**
     * Method description:registerComponent.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param UnicomponentServiceInterface $service
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function registerComponent(UnicomponentServiceInterface $service)
    {
        $serviceProvider = $service->provider();

        $this->setServiceComponents($service->alias(), new $serviceProvider);
    }

    /**
     * Method description:registerDefaultComponent.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @return void
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function registerDefaultComponent()
    {
        if (! $this->config) {
            return;
        }

        foreach ($this->config['components'] as $component) {
            $this->registerComponent(new $component['provider']);
        }
    }

    /**
     * Method description:setServiceInstance.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param $alias
     * @param $instance
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    protected function setServiceComponents($alias, $instance)
    {
        if (! array_key_exists($alias, $this->getServiceComponents())) {
            $this->servicesComponents[$alias] = $instance;
        }

        return $this->servicesComponents;
    }

    /**
     * Method description:getServices.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function getServiceComponents()
    {
        return $this->servicesComponents;
    }

    /**
     * Method description:getServiceComponent.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param $serviceAlias
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function getServiceComponent($serviceAlias)
    {
        return $this->getServiceComponents()[$serviceAlias] ?? null;
    }

    /**
     * Method description:__call.
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 18/10/11
     * @param string $method
     * @param array $parameters
     * @return mixed
     * 返回值类型：string，array，object，mixed（多种，不确定的），void（无返回值）
     */
    public function __call(string $method, array $parameters)
    {
        return $this->getServiceComponent($method);
    }

    /**
     * Method description:__get
     *
     * @author reallyli <zlisreallyli@outlook.com>
     * @since 2018/11/20
     * @param string $componentName
     * @return mixed
     */
    public function __get(string $componentName)
    {
        return $this->getServiceComponent($componentName);
    }
}

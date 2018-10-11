<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午11:28
 */

namespace Reallyli\LaravelUnicomponent;

use Illuminate\Support\ServiceProvider;

class UnicomponentServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('unicomponent', function () {
            return new UnicomponentServiceManager(include_once(__DIR__ . '/UnicomponentConfig.php'));
        });
    }

    /**s
     * @return array
     */
    public function provides()
    {
        return ['unicomponent'];
    }
}
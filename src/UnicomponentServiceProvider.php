<?php
/**
 * Created by PhpStorm.
 * User: reallyli
 * Date: 18/10/11
 * Time: 上午11:28.
 */

namespace Reallyli\LaravelUnicomponent;

use Illuminate\Support\ServiceProvider;

class UnicomponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/unicomponent.php' => config_path('unicomponent.php'),
        ], 'config');
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('unicomponent', function ($app) {
            return new UnicomponentServiceManager($app['config']['unicomponent']);
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

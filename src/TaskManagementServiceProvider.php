<?php namespace Bantenprov\TaskManagement;

use Illuminate\Support\ServiceProvider;
use Bantenprov\TaskManagement\Console\Commands\TaskManagementCommand;
use File;
/**
 * The TaskManagementServiceProvider class
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagementServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        //$this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        $this->pulishControllerStub();
        $this->pulishRouteStub();
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('task-management', function ($app) {
            return new TaskManagement;
        });

        $this->app->singleton('command.task-management', function ($app) {
            return new TaskManagementCommand;
        });

        $this->commands('command.task-management');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'task-management',
            'command.task-management',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('task-management.php');

        $this->mergeConfigFrom($packageConfigPath, 'task-management');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'task-management');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/task-management'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'task-management');

        $this->publishes([
            $packageViewsPath => resource_path('views'),
        ], 'tm-views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('/'),
        ], 'tm-public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        //$this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'tm-migrations');
    }

    public function pulishControllerStub()
    {                     

        $this->publishes([
            //File::put(base_path('app/Http/Controllers/TaskManagementController.php'),File::get(__DIR__.'/stubs/controllers/TaskManagementController.stub'))
        ], 'tm-controller');
        
    }

    public function pulishRouteStub()
    {                     

        $this->publishes([
            //File::put(base_path('routes/web.php'),File::get(__DIR__.'/stubs/route/web.stub'))
        ], 'tm-route');
        
    }
}



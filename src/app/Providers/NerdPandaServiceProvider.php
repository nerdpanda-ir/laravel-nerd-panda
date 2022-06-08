<?php

namespace NerdPanda\App\Providers;

use Illuminate\Support\ServiceProvider;
use NerdPanda\App\Contracts\NerdPandaContract as Contract;
use NerdPanda\App\Contracts\PathRepositoryServiceContract as PathRepoContract;
use NerdPanda\App\Services\NerdPandaService as Service;
use NerdPanda\App\Services\PathRepositoryService as PathRepo;

class NerdPandaServiceProvider extends ServiceProvider
{
    protected PathRepoContract $pathRepo;
    /**
     * Register services.
     *
     * @return void
     */
    public function register():void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__,2).'/config/nerdPanda.php',
            'nerdPanda'
        );
        $this->app->singleton(Service::class);
        $this->app->when(Service::class)
            ->needs('$name')
            ->giveConfig('nerdPanda.name');
        $this->app->bind(
            Contract::class,
            Service::class
        );
        $this->app->alias(Contract::class , 'panda');
        $this->app->singleton(PathRepo::class);
        $this->app->bind(PathRepoContract::class , PathRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(PathRepoContract $pathRepo):void
    {
        $this->pathRepo = $pathRepo;
        $this->bootstrap();
        $this->registerPublishes();
    }
    protected function bootstrap():void {
        $this->registerRoutes();
        $this->registerViewNamespaces();
        $this->registerMigrationsPath();
    }
    protected function registerPublishes():void {
        $this->publishViews();
        $this->publishConfigs();
        $this->publishMigrations();
        $this->publishAssets();
        $this->publishTests();
    }
    protected function registerRoutes():void {
        $this->registerWebRoutes();
    }
    protected function registerWebRoutes():void {
        $this->loadRoutesFrom($this->pathRepo->getRoutePath().'/web.php');
    }
    protected function registerViewNamespaces():void {
        $this->loadViewsFrom($this->pathRepo->getViewPath(),'nerdPanda');
    }

    protected function publishViews():void {
        $this->publishes([
            $this->pathRepo->getViewPath() => resource_path('views/vendor/nerdPanda')
        ],'nerdPanda.views');
    }

    protected function registerMigrationsPath():void {
        $this->loadMigrationsFrom($this->pathRepo->getMigrationPath());
    }
    protected function publishMigrations():void{
        $this->publishes([
            $this->pathRepo->getMigrationPath() => database_path('migrations')
        ],'nerdPanda.migrations');
    }

    protected function publishConfigs():void {
        $this->publishes(
            [$this->pathRepo->getConfigPath() =>config_path()],
            'nerdPanda.configs'
        );
    }
    protected function publishAssets():void {
        $this->publishes([
            $this->pathRepo->getAssetsPath() => public_path('assets')
        ],'nerdPanda.assets');
    }
    protected function publishTests():void {
        $this->publishes([
            $this->pathRepo->getTestsPath() => base_path('tests')
        ],'nerdPanda.tests');
    }

}

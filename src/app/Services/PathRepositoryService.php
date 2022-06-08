<?php

namespace NerdPanda\App\Services;

use NerdPanda\App\Contracts\PathRepositoryServiceContract;
use NerdPanda\App\Traits\HasAssetsPathGetterTrait;
use NerdPanda\App\Traits\HasConfigPathGetterTrait;
use NerdPanda\App\Traits\HasDatabasePathGetterTrait;
use NerdPanda\App\Traits\HasMigrationPathGetterTrait;
use NerdPanda\App\Traits\HasResourcesPathGetterTrait;
use NerdPanda\App\Traits\HasRootPathGetterTrait;
use NerdPanda\App\Traits\HasRoutePathGetterTrait;
use NerdPanda\App\Traits\HasTestsPathGetterTrait;
use NerdPanda\App\Traits\HasViewPathGetterTrait;

class PathRepositoryService implements PathRepositoryServiceContract
{
    use HasRootPathGetterTrait , HasRoutePathGetterTrait ,
        HasResourcesPathGetterTrait , HasViewPathGetterTrait ,
        HasConfigPathGetterTrait , HasDatabasePathGetterTrait ,
        HasMigrationPathGetterTrait , HasAssetsPathGetterTrait ,
        HasTestsPathGetterTrait ;

    protected string $rootPath;
    protected string $routePath;
    protected string $resourcesPath;
    protected string $assetsPath;
    protected string $viewPath;
    protected string $configPath;
    protected string $databasePath;
    protected string $migrationPath;
    protected string $testsPath;

    public function __construct() {
        $this->rootPath = dirname(__DIR__,2);
        $this->routePath = $this->rootPath.'/routes';
        $this->resourcesPath = $this->rootPath.'/resources';
        $this->viewPath = $this->resourcesPath.'/views';
        $this->assetsPath = $this->resourcesPath.'/assets';
        $this->configPath = $this->rootPath.'/config';
        $this->databasePath = $this->rootPath.'/database';
        $this->migrationPath = $this->databasePath.'/migrations';
        $this->testsPath = $this->rootPath.'/tests';
    }
}

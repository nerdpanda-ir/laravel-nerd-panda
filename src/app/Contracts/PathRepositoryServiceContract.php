<?php

namespace NerdPanda\App\Contracts;

interface PathRepositoryServiceContract extends
HasRootPathGetterContract , HasRoutePathGetterContract ,
HasResourcesPathGetterContract , HasViewPathGetterContract ,
HasConfigPathGetterContract , HasDatabasePathGetterContract ,
HasMigrationPathGetterContract , HasAssetsPathGetterContract ,
HasTestsPathGetterContract {

}

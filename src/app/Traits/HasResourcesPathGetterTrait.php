<?php

namespace NerdPanda\App\Traits;

trait HasResourcesPathGetterTrait
{
    /**
     * @return string
     */
    public function getResourcesPath(): string
    {
        return $this->resourcesPath;
    }
}

<?php

namespace NerdPanda\App\Traits;

trait HasRootPathGetterTrait
{
    /**
     * @return string
     */
    public function getRootPath(): string
    {
        return $this->rootPath;
    }
}

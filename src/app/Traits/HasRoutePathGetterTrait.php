<?php

namespace NerdPanda\App\Traits;

trait HasRoutePathGetterTrait {
    /**
     * @return string
     */
    public function getRoutePath(): string
    {
        return $this->routePath;
    }
}

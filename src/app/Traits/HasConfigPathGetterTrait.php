<?php

namespace NerdPanda\App\Traits;

trait HasConfigPathGetterTrait
{
    /**
     * @return string
     */
    public function getConfigPath(): string
    {
        return $this->configPath;
    }
}

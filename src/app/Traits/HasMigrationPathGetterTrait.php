<?php

namespace NerdPanda\App\Traits;

trait HasMigrationPathGetterTrait
{
    /**
     * @return string
     */
    public function getMigrationPath(): string
    {
        return $this->migrationPath;
    }
}

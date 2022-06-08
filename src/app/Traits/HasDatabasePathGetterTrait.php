<?php

namespace NerdPanda\App\Traits;

trait HasDatabasePathGetterTrait
{
    /**
     * @return string
     */
    public function getDatabasePath(): string
    {
        return $this->databasePath;
    }
}

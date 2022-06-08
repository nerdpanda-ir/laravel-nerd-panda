<?php

namespace NerdPanda\App\Contracts;

interface HasDatabasePathGetterContract
{
    public function getDatabasePath(): string;
}

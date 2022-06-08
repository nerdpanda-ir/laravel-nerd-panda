<?php

namespace NerdPanda\App\Traits;

trait HasTestsPathGetterTrait
{
    public function getTestsPath():string {
        return $this->testsPath;
    }
}

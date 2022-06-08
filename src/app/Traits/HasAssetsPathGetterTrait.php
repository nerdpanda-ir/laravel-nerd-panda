<?php

namespace NerdPanda\App\Traits;

trait HasAssetsPathGetterTrait
{
    public function getAssetsPath():string {
        return $this->assetsPath;
    }
}

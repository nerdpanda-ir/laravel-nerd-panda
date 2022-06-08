<?php

namespace NerdPanda\App\Traits;

trait HasViewPathGetterTrait
{
    /**
     * @return string
     */
    public function getViewPath(): string
    {
        return $this->viewPath;
    }
}

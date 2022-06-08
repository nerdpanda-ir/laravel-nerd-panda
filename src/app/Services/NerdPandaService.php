<?php namespace NerdPanda\App\Services ; ?>
<?php

use NerdPanda\App\Contracts\NerdPandaContract;

class NerdPandaService implements NerdPandaContract {
    protected string $name ;
    public function __construct(string $name ) {
        $this->name = $name ;
    }
    public function getName(): string {
        return $this->name;
    }
}

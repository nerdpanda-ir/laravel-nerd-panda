<?php

namespace NerdPanda\App\Facades;

use Illuminate\Support\Facades\Facade;
use NerdPanda\App\Services\NerdPandaService;

/**
 * @see NerdPandaService
 * @method static string getName()
 * */
class NerdPandaFacade extends Facade {
    protected static function getFacadeAccessor():string {
        return 'panda';
    }
}

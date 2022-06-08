<?php

namespace Tests\Unit\Contracts;

use PHPUnit\Framework\TestCase;
use NerdPanda\App\Contracts\NerdPandaContract as Contract ;

class NerdPandaContractTest extends TestCase
{
   protected string $namespace = Contract::class ;
    public function test_is_exist():void {
        $isExist = interface_exists($this->namespace);
        $this->assertTrue($isExist,"$this->namespace interface is missing !!!");
   }
}

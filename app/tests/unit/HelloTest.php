<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Hello;

class HelloTest extends TestCase
{
    public function testGreet()
    {
        $service = new Hello('World');
        $this->assertEquals($service->greet(), 'Hello World!');
    }
}

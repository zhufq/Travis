<?php

//namespace Tests\Unit;
use Administrator\Travis\Foo;

class FooTest extends \PHPUnit\Framework\TestCase
{
    public function testFoo(){
        $foo = new Foo();
        $res = $foo->bar();
        $this->assertTrue($res);
    }
}
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThatStringMatch()
    {
        $string1 = 'testing';
        $string2 = 'testing';
        
        $string3 = 'Testing';

        $this->assertSame($string1, $string2);
    
    }

    public function testThatNumbersAddUp()
    {
        $this->assertEquals(10, 5 + 1);
    }

}

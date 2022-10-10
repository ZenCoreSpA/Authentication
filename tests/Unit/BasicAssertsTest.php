<?php

namespace ZenCoreSpA\Authentication\Tests\Unit;

use ZenCoreSpA\Authentication\Tests\TestCase;

class BasicAssertsTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalseIsFalse()
    {
        $this->assertFalse(false);
    }
}
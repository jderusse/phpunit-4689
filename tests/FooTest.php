<?php

use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        self::markTestSkipped('My Custom message');
    }

    public function testAdd(): void
    {
        $this->assertSame(2, 1+1);
    }

    public function testAdd2(): void
    {
        $this->assertSame(2, 1+1);
    }
}

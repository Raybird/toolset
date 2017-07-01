<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Raybird\Toolset\Main;

/**
 * @covers Main
 */
final class MainTest extends TestCase
{
    public function testConst()
    {
        $this->assertEquals('0.0.0', Main::VERSION);
    }
}
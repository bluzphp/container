<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use Bluz\Tests\Container\Fixtures\ArrayContainer;
use PHPUnit\Framework\TestCase;
use Bluz\Tests\Container\Fixtures\ConcreteContainer;

/**
 * Tests for Container traits
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class ArrayContainerTest extends TestCase
{
    /**
     * @var ArrayContainer
     */
    protected ArrayContainer $class;

    protected array $example = [
        'foo' => 'bar',
        'quz' => 'qux'
    ];

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->class = new ArrayContainer();
    }

    /**
     * Test ArrayAccess trait
     */
    public function testArrayAccess()
    {
        $this->class['foo'] = 'bar';
        $this->class['quz'] = 'qux';

        unset($this->class['quz']);

        self::assertEquals('bar', $this->class['foo']);
        self::assertFalse(isset($this->class['quz']));
        self::assertFalse(isset($this->class['some']));
        self::assertEmpty($this->class['quz']);
        self::assertEmpty($this->class['some']);
        self::assertNull($this->class['quz']);
    }
}

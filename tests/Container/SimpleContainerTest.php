<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use PHPUnit\Framework\TestCase;
use Bluz\Tests\Container\Fixtures\SimpleContainer;

/**
 * Tests for SimpleContainer
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class SimpleContainerTest extends TestCase
{
    /**
     * @var SimpleContainer
     */
    protected SimpleContainer $class;

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
        $this->class = new SimpleContainer();
    }

    /**
     * Test setup SimpleContainer from the array and get as the array
     */
    public function testSetFromArray()
    {
        $this->class->setFromArray($this->example);

        self::assertEquals($this->example, $this->class->toArray());
    }

    /**
     * Test Reset SimpleContainer data to null
     */
    public function testResetContainer()
    {
        $this->class->setFromArray($this->example);

        $this->class->resetArray();

        $result = $this->class->toArray();

        self::assertArrayHasKey('foo', $result);
        self::assertArrayHasKey('quz', $result);
        self::assertNull($result['foo']);
        self::assertNull($result['quz']);
    }
}

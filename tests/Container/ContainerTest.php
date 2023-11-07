<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use PHPUnit\Framework\TestCase;
use Bluz\Tests\Container\Fixtures\ConcreteContainer;

/**
 * Tests for Container traits
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class ContainerTest extends TestCase
{
    /**
     * @var ConcreteContainer
     */
    protected ConcreteContainer $class;

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
        $this->class = new ConcreteContainer();
    }

    /**
     * Test setup Container from array and get as array
     */
    public function testSetFromArray()
    {
        $this->class->setFromArray($this->example);

        self::assertEquals($this->example, $this->class->toArray());
    }

    /**
     * Test Reset Container data to null
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

    /**
     * Test JsonSerialize implementation
     */
    public function testJsonSerialize()
    {
        $this->class->setFromArray($this->example);

        self::assertJsonStringEqualsJsonString(json_encode($this->example), json_encode($this->class));
    }
}

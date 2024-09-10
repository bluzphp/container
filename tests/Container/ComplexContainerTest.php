<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use Bluz\Tests\Container\Fixtures\ComplexContainer;
use PHPUnit\Framework\TestCase;

/**
 * Tests for ComplexContainer
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class ComplexContainerTest extends TestCase
{

    /**
     * @var ComplexContainer
     */
    protected ComplexContainer $class;

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
        $this->class = new ComplexContainer();
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

    /**
     * Test MagicAccess trait
     */
    public function testMagicAccess()
    {
        $this->class->foo = 'bar';
        $this->class->quz = 'qux';

        unset($this->class->quz);

        self::assertEquals('bar', $this->class->foo);
        self::assertFalse(isset($this->class->quz));
        self::assertFalse(isset($this->class->some));
        self::assertEmpty($this->class->quz);
        self::assertEmpty($this->class->some);
        self::assertNull($this->class->quz);
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

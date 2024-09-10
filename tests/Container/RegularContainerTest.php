<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use Bluz\Tests\Container\Fixtures\RegularContainer;
use PHPUnit\Framework\TestCase;
use Bluz\Tests\Container\Fixtures\SimpleContainer;

/**
 * Tests for RegularContainer
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class RegularContainerTest extends TestCase
{
    /**
     * @var RegularContainer
     */
    protected RegularContainer $class;

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
        $this->class = new RegularContainer();
    }

    /**
     * Test RegularAccess trait
     */
    public function testRegularAccess()
    {
        $this->class->set('foo', 'bar');
        $this->class->set('quz', 'qux');

        $this->class->delete('quz');

        self::assertEquals('bar', $this->class->get('foo'));
        self::assertFalse($this->class->has('quz'));
        self::assertFalse($this->class->has('some other'));
        self::assertNull($this->class->get('quz'));
    }
}

<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

namespace Bluz\Tests\Container;

use Bluz\Tests\Container\Fixtures\JsonContainer;
use PHPUnit\Framework\TestCase;

/**
 * Tests for JsonContainer
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class JsonContainerTest extends TestCase
{
    /**
     * @var JsonContainer
     */
    protected JsonContainer $class;

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
        $this->class = new JsonContainer();
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

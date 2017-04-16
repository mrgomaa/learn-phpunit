<?php
namespace PHPUnitTutorial;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }

    protected function tearDown() {
        unset($this->user);
    }

    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }

    public function testName() {
        $expected = "Tom";
        $actual = $this->user->getName();
        $this->assertEquals($expected, $actual);
    }
}

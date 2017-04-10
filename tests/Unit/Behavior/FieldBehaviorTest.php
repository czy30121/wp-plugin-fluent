<?php

use Tests\TestCase;
use Samrap\Acf\Behaviors\FieldBehavior;

class FieldBehaviorTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->setFields(['foo' => 'bar']);

        $this->behavior = new FieldBehavior;
    }

    /** @test */
    public function get()
    {
        $this->assertEquals('bar', $this->behavior->get('foo'));
    }

    /** @test */
    public function getWithUnformattedValue()
    {
        $this->assertEquals(
            'bar [not formatted]',
            $this->behavior->get('foo', null, false)
        );
    }

    /** @test */
    public function update()
    {
        $this->behavior->update('foo', 'fiz');
        $this->assertEquals('fiz', $this->behavior->get('foo'));
    }
}

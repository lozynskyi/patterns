<?php

namespace App\Tests\Unit;

use App\Core\Events\Dispatcher;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{

    /** @test */
    public function it_holds_listeners_in_array()
    {
      $dispatcher = new Dispatcher();
      $this->assertEmpty($dispatcher->getListeners());
      $this->assertIsArray($dispatcher->getListeners());
    }

    /** @test */
    public function it_can_add_listener()
    {
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('UserSignUp', new ListenerStub());

        $this->assertCount(1, $dispatcher->getListeners());
        $this->assertIsArray($dispatcher->getListeners()['UserSignUp']);
    }

    /** @test */
    public function it_can_get_listener_by_event_name()
    {
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('UserSignUp', new ListenerStub());

        $this->assertCount(1, $dispatcher->getListenersByEvent('UserSignUp'));
    }

    /** @test */
    public function it_return_empty_array_if_event_not_set()
    {
        $dispatcher = new Dispatcher();

        $this->assertCount(0, $dispatcher->getListenersByEvent('UserSignUp'));
    }
}

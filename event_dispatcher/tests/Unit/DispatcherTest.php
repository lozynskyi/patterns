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
}

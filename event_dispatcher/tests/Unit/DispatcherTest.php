<?php

namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{

  /** @test */
  public function it_holds_listeners_in_array()
  {
      $dispatcher = new Dispatcher();
      $this->assertEmpty($dispatcher->getListeners());
      $this->assertInternalType('array', $dispatcher->getListeners());
  }

    /** @test */
    public function it_can_add_listener()
    {
        $dispatcher = new Dispatcher();
    }


}

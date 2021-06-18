<?php

namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{

  /** @test */
  public function can_get_event_name()
  {
      $event = new EventStub();
      $this->assertEquals('UserSignetUp', $event->getName());
  }

    /** @test */
    public function it_can_add_listener()
    {

    }


}

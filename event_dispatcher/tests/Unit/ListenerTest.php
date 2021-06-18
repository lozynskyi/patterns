<?php

namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class ListenerTest extends TestCase
{

  /** @test */
  public function handle_method_throws_error_if_invalid_event_given()
  {
      $this->expectException(\TypeError::class);
      $listener = new ListenerStub();
      $listener->handle('not an event');
  }
}

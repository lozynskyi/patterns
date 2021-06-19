<?php

namespace App\Tests\Unit;

use App\Core\Events\Dispatcher;
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
      $this->assertIsArray($dispatcher->getListeners());
  }
}

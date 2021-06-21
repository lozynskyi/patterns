<?php

namespace App\Tests\Integration;

use App\Core\Events\Dispatcher;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{

    /** @test */
    public function can_dispatch_some_event()
    {
        $dispatcher = new Dispatcher();

        $event = new EventStub();
        $mockerListener = $this->createMock(ListenerStub::class);
        $mockerListener->expects($this->once())->method('handle')->with($event);

        $dispatcher->addListener('UserSignetUp', $mockerListener);
        $dispatcher->dispatch($event);
    }

    /** @test */
    public function can_dispatch_an_event_with_multiple_listeners()
    {
        $dispatcher = new Dispatcher();

        $event = new EventStub();

        $mockerListener = $this->createMock(ListenerStub::class);
        $secondMockerListener = $this->createMock(ListenerStub::class);

        $mockerListener->expects($this->once())->method('handle')->with($event);
        $secondMockerListener->expects($this->once())->method('handle')->with($event);

        $dispatcher->addListener('UserSignetUp', $mockerListener);
        $dispatcher->addListener('UserSignetUp', $secondMockerListener);

        $dispatcher->dispatch($event);
    }

}

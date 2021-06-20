<?php

namespace App\Tests\Integration;

use App\Core\Events\Dispatcher;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{

    /** @test */
    public function can_get_event_name()
    {
        $dispatcher = new Dispatcher();

        $event = new EventStub();
        $mockerListener = $this->createMock(ListenerStub::class);
    }

}

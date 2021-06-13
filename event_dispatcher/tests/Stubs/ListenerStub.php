<?php

namespace App\Tests\Stubs;

use App\Core\Events\Event;

class ListenerStub extends Event
{
   public function handle(Event $event): string
   {

   }
}

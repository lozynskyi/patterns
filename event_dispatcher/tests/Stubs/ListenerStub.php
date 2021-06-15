<?php

namespace App\Tests\Stubs;

use App\Core\Events\Event;

class ListenerStub extends Event
{
   //handle desc.
   public function handle(Event $event): string
   {

   }
}

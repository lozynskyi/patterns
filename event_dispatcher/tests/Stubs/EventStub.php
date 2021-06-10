<?php

namespace App\Tests\Stubs;

use App\Core\Events\Event;

class EventSub extends Event
{
   public function getName()
   {
      return 'StubEvent';
   }
}

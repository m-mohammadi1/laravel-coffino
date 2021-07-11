<?php

namespace App\Providers;

use App\Models\Notification;
use App\Providers\ShouldMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToUser
{
    /**
     * Handle the event.
     *
     * @param  ShouldMessage  $event
     * @return void
     */
    public function handle(ShouldMessage $event)
    {
        $message = $event->message;
        $notification = Notification::create($message);

        return $notification;
    }
}

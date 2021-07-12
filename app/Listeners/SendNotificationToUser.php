<?php

namespace App\Listeners;

use App\Events\ShouldMessage;
use App\Models\Notification;
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
        if ($message instanceof Notification) {
            $notification = $message->save();
        } else {
            throw new \InvalidArgumentException('message must be instance of Notification class');
        }
        return $notification;
    }
}

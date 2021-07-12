<?php

use App\Events\ShouldMessage;
use App\Models\Notification;

if (!function_exists('notify')) {
    function notify(string $title, string $message, int $user_id = null) {
        $notification = new Notification([
            'title' => $title ,
            'message' => $message,
            'user_id' => $user_id
        ]);
        event(new ShouldMessage($notification));
    }


}

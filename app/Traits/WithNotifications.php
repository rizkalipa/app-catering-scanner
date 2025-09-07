<?php

namespace App\Traits;

use App\DTOs\NotificationDTO;

trait WithNotifications
{
    public object $notification;

    public function successNotification($message = ''): void
    {
         $this->notification = (new NotificationDTO(
             type: 'success',
             message: $message,
         ))->toObject();
    }

    public function errorNotification($message = ''): void
    {
        $this->notification = (new NotificationDTO(
            type: 'danger',
            message: $message,
        ))->toObject();
    }
}

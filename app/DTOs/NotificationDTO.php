<?php

namespace App\DTOs;

class NotificationDTO
{
    public function __construct(
        public string $type = 'info',
        public string $message,
    ) {}

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'message' => $this->message,
        ];
    }

    public function toObject(): object
    {
        return (object) $this->toArray();
    }
}

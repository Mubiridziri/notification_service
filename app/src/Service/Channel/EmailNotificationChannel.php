<?php

namespace App\Service\Channel;

class EmailNotificationChannel  implements NotificationChannelInterface
{

    public function notify(array $recipients, string $message, array $context = []): array
    {
        return [];
    }

    public function getType(): string
    {
        return 'email';
    }
}
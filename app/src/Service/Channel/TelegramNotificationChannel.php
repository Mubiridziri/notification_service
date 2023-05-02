<?php

namespace App\Service\Channel;

class TelegramNotificationChannel implements NotificationChannelInterface
{

    public function notify(array $recipients, string $message, array $context = []): array
    {
        return ['telegram' => []];
    }

    public function getType(): string
    {
        return 'telegram';
    }
}
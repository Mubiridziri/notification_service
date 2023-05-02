<?php

namespace App\Service\Channel;

class SmsNotificationChannel implements NotificationChannelInterface
{

    public function notify(array $recipients, string $message, array $context = []): array
    {
        return ['sms' => []];
    }

    public function getType(): string
    {
        return 'sms';
    }
}
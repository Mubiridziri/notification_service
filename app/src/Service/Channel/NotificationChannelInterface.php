<?php

namespace App\Service\Channel;

interface NotificationChannelInterface
{
    public function notify(array $recipients, string $message, array $context = []): array;

    public function getType(): string;
}
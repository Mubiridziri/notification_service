<?php

namespace App\Service;

use App\Exception\InvalidChannelException;
use App\Exception\InvalidContextException;
use App\Service\Channel\NotificationChannelInterface;

/**
 * Main entrypoint to send all notifications
 */
class NotificationService
{
    const TARGET = 'target';

    private array $channels = [];

    public function __construct(...$channels)
    {
        $this->channels = $channels;
    }

    /**
     * Send any notification. You can create a Recipient::class
     * yourself to send a message that is not in the system.
     * @param array $recipients array of Recipient:class
     * @param string $message text/html message content
     * @param array $context additional context for generating notification
     * @return array return array of failure messages
     * @throws InvalidContextException
     * @throws InvalidChannelException
     */
    public function notify(array $recipients, string $message, array $context = []): array
    {
        $failures = [];

        if (!isset($context[self::TARGET])) {
            throw new InvalidContextException(
                'Not set target recipient systems. Use \'target\' key for set destinations'
            );
        }

        foreach ($this->channels as $channel) {
            if(!($channel instanceof NotificationChannelInterface)) {
                throw new InvalidChannelException();
            }
            if (in_array($context[self::TARGET], $channel->getType())) {
                $failures[] = $channel->notify($recipients, $message, $context);
            }
        }

        return $failures;
    }
}
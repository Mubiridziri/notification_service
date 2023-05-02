<?php

namespace App\Exception;

use App\Service\Channel\NotificationChannelInterface;

class InvalidChannelException extends NotificationException
{
    protected $message = "Your channel should implementation " . NotificationChannelInterface::class;
}
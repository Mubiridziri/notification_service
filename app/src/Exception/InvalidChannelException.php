<?php

namespace App\Exception;

use App\Service\Channel\NotificationChannelInterface;

class InvalidChannelException extends \Exception
{
    protected $message = "Your channel should implementation " . NotificationChannelInterface::class;
}
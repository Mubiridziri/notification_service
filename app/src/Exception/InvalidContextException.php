<?php

namespace App\Exception;

class InvalidContextException extends NotificationException
{
    protected $message = 'Cannot send notification, because invalid context';
}
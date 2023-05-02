<?php

namespace App\Exception;

class InvalidContextException extends \Exception
{
    protected $message = 'Cannot send notification, because invalid context';
}
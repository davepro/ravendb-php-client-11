<?php

namespace RavenDB\Exceptions;

use Throwable;

class RequestedNodeUnavailableException extends RavenException
{
    public function __construct(string $message = "", ?Throwable $cause = null)
    {
        parent::__construct($message, $cause);
    }
}

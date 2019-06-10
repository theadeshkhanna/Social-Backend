<?php

namespace App\Api\v1\Exceptions;

class HttpException extends \Symfony\Component\HttpKernel\Exception\HttpException {
    const TODO_NOT_FOUND = 1;

    public function __construct($message, $errorCode, $statusCode = 422) {
        parent::__construct($statusCode, $message, null, array(), $errorCode);
    }
}
<?php

namespace App\Api\v1\Exceptions;

class TodoNotFoundException extends HttpException {

    const ERROR_MESSAGE = 'Todo of this particular id does not exist';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, self::TODO_NOT_FOUND);
    }
}
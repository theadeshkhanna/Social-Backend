<?php

namespace App\Api\v1\Exceptions;

class NoLikedTodoException extends HttpException {
    const ERROR_MESSAGE = 'No Liked Todo';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, self::LIKED_TODO_NOT_FOUND);
    }
}
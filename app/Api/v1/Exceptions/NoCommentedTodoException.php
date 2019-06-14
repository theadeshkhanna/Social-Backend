<?php

namespace App\Api\v1\Exceptions;

class NoCommentedTodoException extends HttpException {
    const ERROR_MESSAGE = 'No Commented Todo';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, self::COMMENTED_TODO_NOT_FOUND);
    }
}
<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\CreateCommentContract;

class CreateCommentRequest extends Request implements CreateCommentContract {

    const TODO_ID = 'todo_id';
    const COMMENT = 'comment';

    public function rules() {
        return [
          self::TODO_ID => 'required',
          self::COMMENT => 'required'
        ];
    }

    public function getTodoId() {
        return $this->get(self::TODO_ID);
    }

    public function getComment() {
        return $this->get(self::COMMENT);
    }
}
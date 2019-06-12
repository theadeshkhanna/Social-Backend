<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\CreateLikeContract;

class CreateLikeRequest extends Request implements CreateLikeContract {

    const USER_ID = 'user_id';
    const TODO_ID = 'todo_id';

    public function rules() {
        return [
          self::USER_ID  => 'required',
          self::TODO_ID  => 'required'
        ];
    }

    public function getUserId() {
        return $this->get(self::USER_ID);
    }

    public function getTodoId() {
        return $this->get(self::TODO_ID);
    }
}
<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\CreateLikeContract;

class CreateLikeRequest extends Request implements CreateLikeContract {

    const TODO_ID = 'todo_id';

    public function rules()
    {
        return [
            self::TODO_ID => 'required'
        ];
    }

    public function getTodoId() {
        return $this->get(self::TODO_ID);
    }
}
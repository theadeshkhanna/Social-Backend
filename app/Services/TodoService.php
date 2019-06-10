<?php

namespace App\Services;

use App\services\contracts\CreateTodoContract;
use App\Todo;

class TodoService {

    public function store(CreateTodoContract $contract) {
        $todo = new Todo;

        $todo->title = $contract->getTitle();
        $todo->description = $contract->getDescription();
        $todo->user_id = $contract->getUserid();

        $todo->save();
        return $todo;
    }
}
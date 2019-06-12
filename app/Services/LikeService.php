<?php

namespace App\Sevices;

use App\Like;
use App\Services\Contracts\CreateLikeContract;
use App\Services\TodoService;

class LikeService {
    protected $todoService;

    public function __construct() {
        $this->todoService = new TodoService();
    }

    public function like(CreateLikeContract $contract) {
        $like = new Like();

        $todo = $this->todoService->find($contract->getTodoId());

        $like->user_id = $contract->getUserId();
        $like->todo_id = $contract->getTodoId();

        $todo->likes++;

        $todo->save();
        $like->save();

        return $like;
    }
}
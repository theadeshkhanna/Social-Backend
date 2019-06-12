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

    public function like(CreateLikeContract $contract, $id) {
        $like = new Like();

        $todo = $this->todoService->find($contract->getTodoId());

        $like->likedByUser_id = $id;
        $like->todo_id = $contract->getTodoId();

        $todo->likes++;

        $todo->save();
        $like->save();

        return $like;
    }

    public function deleteLike($id) {
        $like = Like::find($id);

        $like->delete();
    }
}
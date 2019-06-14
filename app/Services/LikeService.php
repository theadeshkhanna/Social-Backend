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

        $like->likedByUser_id = $id;
        $like->todo_id = $contract->getTodoId();

        $like->save();

        return $like;
    }

    public function deleteLike($user_id, $id) {
        $like = Like::where([
            ['id', $id],
            ['likedByUser_id', $user_id]
        ]);

        $like->delete();
    }
}
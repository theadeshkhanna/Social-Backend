<?php

namespace App\Services;

use App\Comment;
use App\Services\Contracts\CreateCommentContract;

class CommentService {

    public function store(CreateCommentContract $contract, $id) {
        $comment = new Comment();

        $comment->todo_id = $contract->getTodoId();
        $comment->comment = $contract->getComment();
        $comment->commented_by_user_id = $id;

        $comment->save();

        return $comment;
    }

    public function destroy($user_id, $id) {
        $comment = Comment::where([
            ['id', $id],
            ['commented_by_user_id', $user_id]
        ]);

        $comment->delete();
    }
}
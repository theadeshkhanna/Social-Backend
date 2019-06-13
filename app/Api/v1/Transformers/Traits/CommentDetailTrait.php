<?php

namespace App\Api\v1\Transformers\Traits;

use App\Comment;

trait CommentDetailTrait {

    public function getAttributes(Comment $comment) {
        return [
            'id'  => (int)$comment->id,
            'commented_by_user_id' => $comment->commented_by_user_id,
            'todo_id' => $comment->todo_id,
            'comment' => $comment->comment
        ];
    }
}
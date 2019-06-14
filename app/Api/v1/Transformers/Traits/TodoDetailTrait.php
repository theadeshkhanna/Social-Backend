<?php

namespace App\Api\v1\Transformers\Traits;

use App\Comment;
use App\Like;
use App\Todo;

trait TodoDetailTrait {

    public function getLikesCount($id) {

        $todo_id = Like::where('todo_id', $id)->get();
        return count($todo_id);
    }

    public function getComments($id) {
        $comment = Comment::where('todo_id', $id)->get('comment');
        return $comment;
    }

    public function getAttributes(Todo $todo) {
       return [
           'id'   => (int)$todo->id,
           'title' => $todo->title,
           'description' => $todo->description,
           'user_id'  =>$todo->user_id,
           'likes'    => $this->getLikesCount((int)$todo->id),
           'comment'  => $this->getComments((int)$todo->id)
       ];
    }
}
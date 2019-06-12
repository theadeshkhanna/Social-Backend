<?php

namespace App\Api\v1\Transformers\Traits;

use App\Like;

trait LikeDetailTrait {

    public function getAttributes (Like $like) {
        return [
            'id'  => (int)$like->id,
            'likedByUser_id' => $like->likedByUser_id,
            'todo_id' => $like->todo_id
        ];
    }
}
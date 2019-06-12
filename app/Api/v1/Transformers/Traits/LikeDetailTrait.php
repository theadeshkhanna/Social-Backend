<?php

namespace App\Api\v1\Transformers\Traits;

use App\Like;

trait LikeDetailTrait {

    public function getAttributes (Like $like) {
        return [
            'id'  => (int)$like->id,
            'user_id' => $like->user_id,
            'todo_id' => $like->todo_id
        ];
    }
}
<?php

namespace App\Api\v1\Transformers\Traits;

use App\Todo;

trait TodoDetailTrait {

    public function getAttributes(Todo $todo) {
       return [
           'id'   => (int)$todo->id,
           'title' => $todo->title,
           'description' => $todo->description,
           'user_id'  =>$todo->user_id
       ];
    }
}
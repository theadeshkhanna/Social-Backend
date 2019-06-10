<?php

namespace App\Api\v1\Transformers;

use App\Api\v1\Transformers\Traits\TodoDetailTrait;
use App\Todo;
use League\Fractal\TransformerAbstract;

class TodoTransformer extends TransformerAbstract {
    use TodoDetailTrait;

    public function transform(Todo $todo) {
        return $this->getAttributes($todo);
    }
}
<?php

namespace App\Api\v1\Transformers;

use App\Api\v1\Transformers\Traits\CommentDetailTrait;
use App\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract {
    use CommentDetailTrait;

    public function transform(Comment $comment) {
        return $this->getAttributes($comment);
    }
}
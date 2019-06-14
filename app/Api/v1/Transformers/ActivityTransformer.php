<?php

namespace App\Api\v1\Transformers;

use ActivityDetailTrait;
use App\Comment;
use App\Like;
use App\User;
use League\Fractal\TransformerAbstract;

class ActivityTransformer extends TransformerAbstract {
    use ActivityDetailTrait;

    public function transform(User $user, Like $like, Comment $comment) {
        return $this->getAttributes($user, $like, $comment);
    }
}
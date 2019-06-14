<?php

use App\Comment;
use App\Like;
use App\User;

trait ActivityDetailTrait {

    public function getAttributes(User $user, Like $like, Comment $comment) {
        return [

        ];
    }
}
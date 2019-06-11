<?php

namespace App\Api\v1\Transformers\Traits;

use App\User;

trait UserDetailTrait {
    public function getAttributes(User $user) {
        return [
            'id'   => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}
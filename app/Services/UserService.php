<?php

namespace App\Services;

use App\Comment;
use App\Like;
use App\Services\Contracts\CreateUserContract;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService {

    public function CreateUser(CreateUserContract $contract) {
        $user = new User;

        $user->name = $contract->getName();
        $user->email = $contract->getEmail();
        $user->password = Hash::make($contract->getPassword());

        $user->save();
        return $user;
    }

    public function fetchActivity($id) {
        $user = User::whereId($id)->get();
        $like = Like::where('likedByUser_id', $id)->orderBy('created_at', 'desc')->get();
        $comment = Comment::where('commented_by_user_id', $id)->orderBy('created_at', 'desc')->get();

        return [
            'user'  =>   $user,
            'comment' => $comment,
            'like'    => $like
        ];
    }
}
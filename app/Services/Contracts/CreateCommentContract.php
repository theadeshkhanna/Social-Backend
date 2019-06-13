<?php

namespace App\Services\Contracts;

interface CreateCommentContract {
    public function getTodoId();
    public function getComment();
}
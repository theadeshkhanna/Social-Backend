<?php

namespace App\Services\Contracts;

interface UpdateTodoContract {

    public function getTitle();
    public function hasTitle();

    public function getDescription();
    public function hasDescription();
}
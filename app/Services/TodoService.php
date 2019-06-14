<?php

namespace App\Services;

use App\Api\v1\Exceptions\NoLikedTodoException;
use App\Api\v1\Exceptions\TodoNotFoundException;
use App\Like;
use App\services\contracts\CreateTodoContract;
use App\Services\Contracts\UpdateTodoContract;
use App\Todo;
use Illuminate\Support\Facades\DB;

class TodoService {

    public function index($id) {
        return Todo::query()->whereUserId($id)->get();
    }

    public function find($id) {
        $todo = Todo::find($id);

        if(is_null($todo)) {
            throw new TodoNotFoundException;
        }

        return $todo;
    }

    public function store(CreateTodoContract $contract, $id) {
        $todo = new Todo;

        $todo->title = $contract->getTitle();
        $todo->description = $contract->getDescription();
        $todo->user_id = $id;

        $todo->save();
        return $todo;
    }

    public function updateTodo(UpdateTodoContract $contract, $id) {
        $todo = $this->find($id);

        if($contract->hasTitle()) {
            $todo->title = $contract->getTitle();
        }

        if($contract->hasDescription()) {
            $todo->description = $contract->getDescription();
        }

        $todo->save();
        return $todo;
    }

    public function fetchLikedTodo($id) {
        $data = DB::table('todos')->join('likes', 'todos.id', '=','likes.todo_id')
                ->whereNotNull('likes.todo_id')
                ->whereUserId($id)->get();

        dd($data);

    }

    public function fetchCommentedTodo() {

    }
}
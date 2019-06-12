<?php

namespace App\Api\v1\Controllers;

use App\Api\v1\Requests\CreateTodoRequest;
use App\Api\v1\Requests\UpdateTodoRequest;
use App\Api\v1\Transformers\TodoTransformer;
use App\Services\TodoService;
use Illuminate\Support\Facades\Auth;


class TodoController extends BaseController {
     protected $todoService;

     public function __construct() {
         $this->todoService = new TodoService();
     }

     public function index() {
         return $this->response->collection($this->todoService->index(Auth::id()), new TodoTransformer());
     }

     public function show($id) {
         $todo = $this->todoService->find($id);
         return $this->response->item($todo, new TodoTransformer());
     }

    public function store(CreateTodoRequest $request) {
        $todo = $this->todoService->store($request, Auth::id());
        return $this->response->item($todo, new TodoTransformer());
    }

    public function update(UpdateTodoRequest $request, $id) {
        $todo = $this->todoService->updateTodo($request, $id);
        return $this->response->item($todo, new TodoTransformer());
    }

    public function destroy($id) {
         $todo = $this->todoService->find($id);

         $todo->delete();
    }
}
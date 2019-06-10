<?php

namespace App\Api\v1\Controllers;

use App\Api\v1\Requests\CreateTodoRequest;
use App\Api\v1\Transformers\TodoTransformer;
use App\Services\TodoService;

class TodoController extends BaseController {
     protected $todoService;

     public function __construct() {
         $this->todoService = new TodoService();
     }

    public function store(CreateTodoRequest $request) {
        $todo = $this->todoService->store($request);
        return $this->response->item($todo, new TodoTransformer());
    }
}
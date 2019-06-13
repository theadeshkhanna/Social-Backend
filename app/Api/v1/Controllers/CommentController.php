<?php

namespace App\Api\v1\Controllers;

use App\Api\v1\Requests\CreateCommentRequest;
use App\Api\v1\Transformers\CommentTransformer;
use App\Services\CommentService;
use Illuminate\Support\Facades\Auth;

class CommentController extends BaseController {
    protected $commentService;

    public function __construct() {
        $this->commentService = new CommentService();
    }

    public function store(CreateCommentRequest $request) {
        $comment = $this->commentService->store($request, Auth::id());
        return $this->response->item($comment, new CommentTransformer());
    }

    public function destroy($id) {
        $this->commentService->destroy(Auth::id(), $id);
    }
}
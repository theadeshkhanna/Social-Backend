<?php

namespace App\Api\v1\Controllers;

use App\Api\v1\Requests\CreateLikeRequest;
use App\Api\v1\Transformers\LikeTransformer;
use App\Sevices\LikeService;
use Illuminate\Support\Facades\Auth;

class LikeController extends BaseController {
    protected $likeService;

    public function __construct() {
        $this->likeService = new LikeService();
    }

    public function store(CreateLikeRequest $request) {
        $like = $this->likeService->like($request, Auth::id());
        return $this->response->item($like, new LikeTransformer());
    }

    public function destroy($id) {
        $this->likeService->deleteLike( Auth::id(), $id);
    }
}
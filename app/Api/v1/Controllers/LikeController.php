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

    public function toLike(CreateLikeRequest $request) {
        $like = $this->likeService->like($request, Auth::id());
        return $this->response->item($like, new LikeTransformer());
    }
}
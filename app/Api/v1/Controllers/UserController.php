<?php

namespace App\Api\v1\Controllers;

use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController {
    protected $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function getActivity() {
        $activity = $this->userService->fetchActivity(Auth::user());
        return $this->response->collection($activity, new ActivityTransformer());
    }
}
<?php

namespace App\Api\v1\Controllers;

use App\Api\v1\Requests\UploadMediaRequest;
use App\Services\MediaService;

class MediaController extends BaseController {

    protected $mediaService;

    public function __construct() {
        $this->mediaService = new MediaService();
    }

    public function upload(UploadMediaRequest $request) {
        $url = $this->mediaService->uploadMedia($request);
        return $url;
    }
}

<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\UploadMediaContract;

class UploadMediaRequest extends Request implements UploadMediaContract {

    const FILE = 'file';

    public function rules() {
        return [
            self::FILE => 'required|file'
        ];
    }

    public function getFile() {
        return $this->file(self::FILE);
    }
}

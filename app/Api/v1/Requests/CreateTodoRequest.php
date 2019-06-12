<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\CreateTodoContract;

class CreateTodoRequest extends Request implements  CreateTodoContract {

    const TITLE = 'title';
    const DESCRIPTION = 'description';

    public function rules() {
        return [
            self::TITLE => 'required|string',
            self::DESCRIPTION => 'required|string',
        ];
    }

    public function getTitle() {
        return $this->get(self::TITLE);
    }

    public function getDescription() {
        return $this->get(self::DESCRIPTION);
    }
}
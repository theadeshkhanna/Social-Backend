<?php

namespace App\Api\v1\Requests;

use App\Services\Contracts\UpdateTodoContract;

class UpdateTodoRequest extends Request implements UpdateTodoContract {

    const TITLE = 'title';
    const DESCRIPTION = 'description';

    public function getTitle() {
        return $this->get(self::TITLE);
    }

    public function hasTitle() {
       return $this->has(self::TITLE);
    }

    public function getDescription() {
        return $this->get(self::DESCRIPTION);
    }

    public function hasDescription() {
        return $this->has(self::DESCRIPTION);
    }
}
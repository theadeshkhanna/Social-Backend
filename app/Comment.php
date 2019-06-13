<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends model {

    public function todo() {
        return $this->belongsTo(Todo::class);
    }
}

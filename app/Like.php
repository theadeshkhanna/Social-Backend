<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends model {

    public function todo() {
        return $this->belongsTo(Todo::class);
    }
}
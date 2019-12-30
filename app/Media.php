<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    public function user() {
        $this->belongsTo(User::class);
    }
}

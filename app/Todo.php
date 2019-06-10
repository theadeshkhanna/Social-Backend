<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Todo extends model {

 public function user () {
     return $this->belongsTo(User::class);
 }

}
<?php

use App\Todo;
use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder {

    public function run() {
        $todo = new Todo();
        $todo->title = 'kvbkjsvb';
        $todo->description = 'dcsjlbvcl';
        $todo->user_id = '1';
        $todo->save();

        $todo = new Todo();
        $todo->title = 'fsubvjk';
        $todo->description = 'dcxjjbds';
        $todo->user_id = '1';
        $todo->save();

        $todo = new Todo();
        $todo->title = 'jbclc';
        $todo->description = 'dcsjcknlbvcl';
        $todo->user_id = '2';
        $todo->save();

        $todo = new Todo();
        $todo->title = 'lsjdbnc';
        $todo->description = 'lkzc';
        $todo->user_id = '2';
        $todo->save();
    }
}
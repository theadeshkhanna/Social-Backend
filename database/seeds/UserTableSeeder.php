<?php

use App\User;
use Illuminate\database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {

    public function run() {

        $user = new User();
        $user->name = 'Adam';
        $user->email = 'a@gmail.com';
        $user->password=Hash::make('12345');                //12345
        $user->save();

        $user = new User();
        $user->name = 'Jon';
        $user->email = 'b@gmail.com';
        $user->password=Hash::make('12345');                //12345
        $user->save();

    }
}
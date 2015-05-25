<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
    
    public function run(){

        User::create(array(
            'email'     => 'admin@admin.com',
            'name'  => 'Jesus Alfonso Alvarado Castillo',
            'password' => Hash::make('admin'),
            'avatar'  => 'one.jpg'
        ));

    }

}
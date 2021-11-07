<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
         public function run()
            {
                User::create( [
                    'name'=>'admin',
                    'phone'=>'123',
                    'email'=>'rajith911@gmail.com',
                    'password'=>Hash::make('pass'),
                    'remember_token'=> str_random(10),
                ]);
    }
}

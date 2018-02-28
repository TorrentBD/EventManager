<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Mituram Ray" ,
            'email' => "mituramray09@gmail.com",
            'password' => "111111",   //
        ]);
    }
}

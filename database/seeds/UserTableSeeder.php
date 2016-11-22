<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("users")->insert([

        	"username" => "Seun Matt",
        	"email" => "test@test.com",
        	"password" => bcrypt("test")
        ]);

    }
}

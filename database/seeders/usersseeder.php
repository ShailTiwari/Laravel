<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\str_random;
use Illuminate\Database\Eloquent\Model;

class usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 1; $i < 100; $i++)
        {
                    DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'email_verified_at' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);



     }
        //
    }
}

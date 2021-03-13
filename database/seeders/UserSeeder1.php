<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Database\User;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



    class UserSeeder1 extends Seeder
        {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {




            DB::table('users')->insert([
                //'id' => ::random(),
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                //'email_verified_at' => null,
                'password' => Hash::make('password'),
                // 'remember_token' => null,
                //'created_at' => null,
                //'updated_at' => null,



            ]);

            /*
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com'));

            */

    }

}


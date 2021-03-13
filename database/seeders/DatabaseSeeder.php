<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use database\seeders\UserSeeder1;
use App\Models\User;
//use App\Models\Admin\UserSeeder1;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $faker = Faker::create();
        //for($i=0; $i<20;$i++


        DB::table('users')->insert([
            //'id' => Int::random(3),
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            //'email_verified_at' => null,
            'password' => Hash::make('password'),
            // 'remember_token' => null,
            //'created_at' => null,
            //'updated_at' => null,

            ]);


        DB::table('recipes')->insert([
            'author_id' => $this->faker->randomDigit,
            'title' => Str::random(10),
            'content' => $this->faker->text,
            'ingredients' => $this->faker->ingredient,
            'url' => $this->faker->url,
            'tags' => '#juracuisine, #AOC, #plats',
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' =>$this->faker->promotionCode,





         ]);



            //\App\Models\User::factory(5)->has(\App\Models\Recipe::factory()->count(10))->create();

        $this->command->info('User table seeded!');


       /*
        $this->call(['UserSeeder1'::UserSeeder1(),
        ]);

        $this->command->info('User table seeded!');

        */
        }
    }



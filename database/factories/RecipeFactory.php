<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Bezhanov\Faker\Provider\Food;




class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    //exo 4.2
    {
        return [


            'author_id' => $this->faker->randomDigit,
            'title' => Str::random(10),
            'content' => $this->faker->text,
            'ingredients' => $this->faker->ingredient,
            'url' => $this->faker->url,
            'tags' => '#juracuisine, #AOC, #plats',
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' =>$this->faker->promotionCode,



        ];









                            /*
                            $table->id();
                            $table->bigInteger('author_id');
                            $table->mediumText('title');
                            $table->longText('content');
                            $table->longText('ingredients');
                            $table->string('url');
                            $table->text('tags');
                            $table->dateTime('date');
                            $table->string('status');

                            */



                            /*
                            'name' => $this->faker->name,
                            'email' => $this->faker->unique()->safeEmail,
                            'email_verified_at' => now(),
                            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                            'remember_token' => Str::random(10),
                                */

    }

}

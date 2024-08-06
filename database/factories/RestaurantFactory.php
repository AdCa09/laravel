<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $faker = fake();
        $name = $faker->unique()->word;
        $created_at = $faker->dateTimeBetween('-1 year');
        $word = $faker->word(6);

        return [
            'thumbnail'=>fake()->imageUrl(),
            'name'=>$name,
            'slug'=>Str::slug($name),
            'address'=>$faker->paragraph(2),
            'zipCode'=>$faker->randomNumber(4, true),
            'town'=>$word,
            'description'=>$faker->paragraphs(asText: true),
            'review'=>$faker->randomNumber(1),
            'created_at'=>$created_at,
            'updated_at'=>$created_at,
        ];
    }
}

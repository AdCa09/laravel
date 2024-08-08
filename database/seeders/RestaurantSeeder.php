<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $tags = Tag::all();

        Restaurant::factory(5)
            ->sequence(fn() => [
                'category_id' => $categories->random(),
            ])
            ->create()
            ->each(fn($restaurant) => $restaurant->tags()->attach($tags->random(rand(1, 3))));
    }
}

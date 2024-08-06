<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        Restaurant::factory(20)
        ->sequence(fn() => [
            'category_id' => $categories->random(),
        ])
        ->create();
        
    }
} 

<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect(['Italien', 'Grec', 'Français', 'Japonais', 'Pizza', 'Burgers', 'Poisson et fruits de mer', 'Tacos', 'Vietnamien', 'sushi' ]);

        $categories->each(fn($category)=> Category::create([
            'type'=>$category,
        ]));
    }
}

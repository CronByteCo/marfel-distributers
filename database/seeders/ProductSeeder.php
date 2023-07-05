<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        Product::create([
            'name' => 'Face mask',
            'code' => 'B012',
            'price' => 5,
            'stock_in' => 100,
            'image' => 'face_mask.jpg',
            'category_id' => Category::first()->id,
            'description' => $faker->paragraph(),
        ]);
        Product::create([
            'name' => 'Full Face Visor',
            'code' => 'B013',
            'price' => 50,
            'stock_in' => 200,
            'image' => 'full_face_visor.jpg',
            'category_id' => Category::first()->id,
            'description' => $faker->paragraph(),
        ]);
        Product::create([
            'name' => 'Sanitizer',
            'code' => 'B014',
            'price' => 5,
            'stock_in' => 40,
            'image' => 'sanitizer.jpg',
            'category_id' => Category::first()->id,
            'description' => $faker->paragraph(),
        ]);
    }
}

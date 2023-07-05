<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        Category::create([
            'name'=> 'Covid Supplies',
            'description' => $faker->paragraph(),
        ]);
        Category::create([
            'name'=> 'Office Supplies',
            'description' => $faker->paragraph(),
        ]);
        Category::create([
            'name'=> 'Stationery Products',
            'description' => $faker->paragraph(),
        ]);
        Category::create([
            'name'=> 'Greeting Cards',
            'description' => $faker->paragraph(),
        ]);
        Category::create([
            'name'=> 'Gifts',
            'description' => $faker->paragraph(),
        ]);
        Category::create([
            'name'=> 'School Bags',
            'description' => $faker->paragraph(),
        ]);
    }
}

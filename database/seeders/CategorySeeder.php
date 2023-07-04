<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'Covid Supplies',
        ]);
        Category::create([
            'name'=> 'Office Supplies',
        ]);
        Category::create([
            'name'=> 'Stationery Products',
        ]);
        Category::create([
            'name'=> 'Greeting Cards',
        ]);
        Category::create([
            'name'=> 'Gifts',
        ]);
        Category::create([
            'name'=> 'School Bags',
        ]);
    }
}

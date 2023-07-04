<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'delata',
            'code' => 'ERASDF',
            'price' => 5,
            'stock_in' => 1,
            'image' => 'default.png',
            'category_id' => Category::first()->id,
        ]);
    }
}

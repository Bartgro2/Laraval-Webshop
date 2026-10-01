<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create([
            'category_id' => fn() => Category::inRandomOrder()->first()->id,
            'brand_id'    => fn() => Brand::inRandomOrder()->first()->id,
        ]);
    }
}

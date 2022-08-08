<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(100)->create();

        $categories = ProductCategory::all();
        $attributes = ProductAttribute::all();
        Product::all()->each(function($product) use ($categories, $attributes) {
            $product->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
            $product->pattributes()->attach(
                $attributes->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}

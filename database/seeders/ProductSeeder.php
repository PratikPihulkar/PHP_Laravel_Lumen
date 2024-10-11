<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // $faker= Faker::create();
        // for ($i=0; $i<100; $i++)
        // {
        //     $product= new Product;
        //     $product->name=$faker->word;
        //     // $product->category=$faker->numberBetween(1, 1000);
        //     $product->category=01;
        //     $product->weight=$faker->randomFloat(2, 0.1, 100); //between 0.1 and 100 kg
        //     $product->quantity=$faker->numberBetween(1, 1000);
        //     $product->created_at = Carbon::now();  // Use Carbon directly Dont Use Faker
        //     $product->updated_at = Carbon::now();  // Use Carbon directly
        // $product->save();
        // }
        $faker = Faker::create();
        $categoryIds = ProductCategory::pluck('id')->toArray(); // Get all valid category IDs

        // for ($i = 0; $i < 100; $i++) {
            $product = new Product;
            $product->name = $faker->word;
            $product->category = $faker->randomElement($categoryIds); // Pick a random valid category ID
            $product->weight = $faker->randomFloat(2, 0.1, 100); // between 0.1 and 100 kg
            $product->quantity = $faker->numberBetween(1, 1000);
            $product->created_at = Carbon::now();
            $product->updated_at = Carbon::now();
            $product->save();
        // }
    }
}

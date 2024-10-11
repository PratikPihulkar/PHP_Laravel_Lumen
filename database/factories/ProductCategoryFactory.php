<?php

namespace Database\Factories;

use App\Model;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Carbon\Carbon;


class ProductCategoryFactory extends Factory
{
    
    protected $model = ProductCategory::class;

    public function definition(): array
    {

    	return [
    	    'name'     => $this->faker->word, // e.g., "widget"
            'created_at'       => Carbon::now(),
            'updated_at'       => Carbon::now()
    	];
    }
}

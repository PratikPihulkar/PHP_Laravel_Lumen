<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductCategoryFactoryController extends Controller
{
    // public function insert_products()
    // {

    //     // factory(ProductCategory::class, 10000)->create();
    //     ProductCategory::factory()->count(10)->create();

    //     return '10 products have been inserted!';
    // }

    public function insert_products()
    {
        ProductCategory::factory()->count(10)->create();

        return '10 products have been inserted!';
    }
}

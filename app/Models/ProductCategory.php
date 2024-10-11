<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_category';

    // Fields that are mass assignable
    protected $fillable = [
        
        'name',
    ];

    // Relationships NOT NEED HERE
    public function products()
    {
        return $this->hasMany(Product::class, 'category');  
    
    }
}

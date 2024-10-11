<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model{
    protected $table = 'product';

    // Fields that are mass assignable
    protected $fillable = [
        
        
        'name',
        'category',
        'weight',
        'quantity',
    ];

    // Relationships NOT NEED HERE
    public function products()
    {
        return $this->hasMany(Product::class, 'category');   
       
    }
}
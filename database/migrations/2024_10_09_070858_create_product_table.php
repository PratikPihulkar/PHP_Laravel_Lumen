<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->unsignedBigInteger('category');
            $table->decimal('weight');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('category')->references('id')->on('product_category')->onDelete('cascade');
           
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('document_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained('documents');
            $table->foreignId('product_id')->constrained('products');
            $table->integer('selling_price')->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('total')->default(0);
            $table->integer('price_hvat')->default(0);
            $table->integer('price_vvat')->default(0);
            $table->integer('total_hvat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_product');
    }
};

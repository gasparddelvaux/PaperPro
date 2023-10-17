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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('ean_code')->nullable();
            $table->integer('stock')->default(0);
            $table->integer('stock_min')->default(0);
            $table->integer('buying_price')->default(0);
            $table->json('selling_price');
            $table->longText('description')->nullable();
            $table->longText('comment')->nullable();
            $table->string('status', 1)->default('N');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

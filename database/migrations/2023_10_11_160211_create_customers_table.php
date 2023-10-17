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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('name');
            $table->string('email')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('website')->nullable(true);
            $table->string('vat_number')->nullable(true);
            $table->longText('description')->nullable(true);
            $table->longText('comment')->nullable(true);
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
        Schema::dropIfExists('customers');
    }
};

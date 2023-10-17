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
        Schema::create('documenttypes', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 20)->unique();
            $table->string('name')->unique();
            $table->longText('description')->nullable(true);
            $table->string('status', 1)->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documenttypes');
    }
};

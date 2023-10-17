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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('documenttype_id')->constrained('documenttypes');
            $table->string('reference')->unique()->nullable(false);
            $table->integer('totalhvat')->default(0);
            $table->integer('vat')->default(0);
            $table->integer('totalttc')->default(0);
            $table->string('status', 1)->default('N');
            $table->longText('comment')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

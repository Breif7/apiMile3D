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
    $table->id('ProductID');
    $table->string('ProductName');
    $table->text('Description');
    $table->string('Category');
    $table->decimal('Price', 8, 2);
    $table->string('Material');
    $table->string('Dimensions');
    $table->decimal('Weight', 8, 2);
    $table->text('ImageURLs');
    $table->integer('StockQuantity');
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

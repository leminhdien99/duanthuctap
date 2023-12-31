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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->integer('quantify');
            $table->bigInteger('price');
            $table->bigInteger('sale_price')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('delete')->default(0);
            $table->integer('view')->default(0);
            $table->integer('selling')->default(0);
            $table->longText('describe');
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

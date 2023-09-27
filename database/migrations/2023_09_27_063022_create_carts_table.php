<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    /**
     * Run the migrations.
     */
    public function up()
    : void{
        Schema::create('carts', function (Blueprint $table){
            $table->id();
            $table->foreignId('id_product')->constrained('products');
            $table->foreignId('id_user')->constrained('users');
            $table->integer('quantify');
            $table->bigInteger('price');
            $table->bigInteger('total');
            $table->date('date_input');
            $table->string('name_product',255);
            $table->string('image',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('carts');
    }
};

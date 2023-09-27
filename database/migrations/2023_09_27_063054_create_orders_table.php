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
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->date('date_input');
            $table->bigInteger('price');
            $table->longText('address');
            $table->string('phone',10);
            $table->bigInteger('pay');
            $table->tinyInteger('status')->default(0);
            $table->string('voucher');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('orders');
    }
};

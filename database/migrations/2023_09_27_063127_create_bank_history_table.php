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
        Schema::create('bank_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_order')->constrained('orders');
            $table->string('receiver_name',255);
            $table->string('receiver_stk',255);
            $table->bigInteger('price')->default(0);
            $table->string('sender_name');
            $table->string('sender_stk',255);
            $table->string('description',255);
            $table->string('note',255);
            $table->tinyInteger('status')->default(0);
            $table->date('date_input');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_history');
    }
};

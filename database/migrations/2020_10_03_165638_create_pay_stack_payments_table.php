<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayStackPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_stack_payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('music_id');
            $table->uuid('user_id');
            $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('currency')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('card_type')->nullable();
            $table->string('bank')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_stack_payments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlutterWavePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flutter_wave_payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('music_id');
            $table->uuid('user_id');
            $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('payment_type');
            $table->string('transaction_id');
            $table->string('tx_ref'); //transaction reference number
            $table->string('flw_ref'); //flutterwave transaction ref
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('charged_amount')->nullable();
            $table->string('app_fee')->nullable();
            $table->string('merchant_fee')->nullable();
            $table->string('processor_response')->nullable();
            $table->string('auth_model')->nullable();
            $table->string('payment_created_at')->nullable();
            $table->string('account_id')->nullable();
            $table->string('amount_settled')->nullable();
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
        Schema::dropIfExists('flutter_wave_payments');
    }
}

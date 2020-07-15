<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('exacturl');
            $table->uuid('music_id');
            $table->double('amount');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
            $table->string('time')->default(date('YYYY-MM-dd HH:mm:ss'));
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
        Schema::dropIfExists('temporary_transactions');
    }
}

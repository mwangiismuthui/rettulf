<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlutterWaveAPISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flutter_wave_a_p_i_s', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('public_key')->nullable();
            $table->string('secret_key')->nullable();
            $table->string('encryption_key')->nullable();
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
        Schema::dropIfExists('flutter_wave_a_p_i_s');
    }
}

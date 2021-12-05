<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwoInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_inputs', function (Blueprint $table) {
            $table->id();
            $table->enum('bidang' , ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin']);
            $table->integer('volume_jumlah');
            $table->integer('rvo');
            $table->integer('rvo_maksimal');
            $table->integer('volume_target_realisasi');
            $table->integer('capaian_realisasi');
            $table->bigInteger('pagu');
            $table->bigInteger('rp');
            $table->integer('capaian');
            $table->bigInteger('sisa');
            $table->foreignId('one_input_id')->references('id')->on('one_inputs')->onDelete('cascade');;
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('two_inputs');
    }
}

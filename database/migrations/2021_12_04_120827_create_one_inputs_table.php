<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOneInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('digit');
            $table->string('kd_kro');
            $table->string('kd_ro');
            $table->enum('bidang' , ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin']);
            $table->string('nama_ro');
            $table->string('capaian_ro')->nullable()->default(null);
            $table->integer('volume_target');
            $table->string('satuan');
            $table->integer('volume_jumlah');
            $table->integer('rvo');
            $table->integer('rvo_maksimal');
            $table->integer('volume_target_realisasi');
            $table->integer('capaian_realisasi');
            $table->bigInteger('pagu');
            $table->bigInteger('rp');
            $table->integer('capaian');
            $table->bigInteger('sisa');
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
        Schema::dropIfExists('inputs');
    }
}

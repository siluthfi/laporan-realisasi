<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->string('digit');
            $table->string('kd_kro');
            $table->string('kd_ro');
            $table->enum('bidang' , ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK']);
            $table->integer('volume_target');
            $table->string('satuan');
            $table->integer('volume_capaian');
            $table->string('uraian')->nullable()->default(null);
            $table->string('nomor_dokumen')->nullable()->default(null);
            $table->timestampTz('tanggal')->nullable()->default(null);
            $table->integer('volume_jumlah');
            $table->integer('rvo');
            $table->integer('rvo_maksimal');
            $table->integer('volume_target_realisasi');
            $table->integer('capaian_realisasi');
            $table->bigInteger('pagu');
            $table->bigInteger('rp');
            $table->integer('capaian');
            $table->bigInteger('sisa');
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

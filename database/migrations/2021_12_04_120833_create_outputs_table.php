<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('input_realisation_id');
            $table->enum('bidang' , ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin']);
            $table->bigInteger('anggaran_pagu');
            $table->bigInteger('anggaran_realisasi');
            $table->integer('output_target');
            $table->integer('output_realisasi');
            $table->foreignId('one_inputs_id');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outputs');
    }
}

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
            $table->integer('volume_capaian');
            $table->string('uraian')->nullable()->default(null);
            $table->string('nomor_dokumen')->nullable()->default(null);
            $table->timestampTz('tanggal')->nullable()->default(null);
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->foreignId('one_input_id')->references('id')->on('one_inputs')->onDelete('cascade');
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
        Schema::dropIfExists('three_inputs');
    }
}

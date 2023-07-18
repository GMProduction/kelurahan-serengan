<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable(true)->default(null);
            $table->bigInteger('jenis_surat_id')->unsigned()->unique();
            $table->foreign('jenis_surat_id')->references('id')->on('jenis_surats');
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('tanggal_awal')->nullable(true)->default(null);
            $table->date('tanggal_akhir')->nullable(true)->default(null);
            $table->text('keperluan')->nullable(true)->default(null);
            $table->text('keterangan')->nullable(true)->default(null);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('pengajuans');
    }
}

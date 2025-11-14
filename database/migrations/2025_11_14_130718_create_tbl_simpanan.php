<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSimpanan extends Migration {
    public function up() {

        Schema::create('tbl_jenis_simpanan', function (Blueprint $table) {
            $table->tinyIncrements('jenis_simpanan');
            $table->string('nama_simpanan', 50)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        Schema::create('tbl_simpanan', function (Blueprint $table) {
            $table->increments('simpanan_id');
            $table->unsignedInteger('anggota_id');
            $table->unsignedInteger('jenis_simpanan');
            $table->date('tanggal')->nullable();
            $table->decimal('jumlah', 15, 2)->default(0);
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('anggota_id')
                ->references('anggota_id')->on('tbl_anggota')
                ->cascadeOnDelete();

            $table->foreign('jenis_simpanan')
                ->references('jenis_simpanan')->on('tbl_jenis_simpanan')
                ->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('tbl_simpanan');
        Schema::dropIfExists('tbl_jenis_simpanan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsaha extends Migration {
    public function up() {

        Schema::create('tbl_koperasi', function (Blueprint $table) {
            $table->increments('koperasi_id');
            $table->string('nama', 150)->nullable();
            $table->string('nib', 50)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->unsignedInteger('desa_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('desa_id')
                  ->references('desa_id')->on('tbl_desa')
                  ->nullOnDelete();
        });

        Schema::create('tbl_jenis_bidang_usaha', function (Blueprint $table) {
            $table->tinyIncrements('jenis_bidang_usaha');
            $table->string('keterangan', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        Schema::create('tbl_bidang_usaha', function (Blueprint $table) {
            $table->unsignedInteger('koperasi_id');
            $table->unsignedTinyInteger('jenis_bidang_usaha');
            $table->string('nama_bidang_usaha', 150)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('ketua', 100)->nullable();
            $table->string('sekretaris', 100)->nullable();
            $table->string('bendahara', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->primary(['koperasi_id', 'jenis_bidang_usaha']);

            $table->foreign('koperasi_id')
                  ->references('koperasi_id')->on('tbl_koperasi')
                  ->cascadeOnDelete();

            $table->foreign('jenis_bidang_usaha')
                  ->references('jenis_bidang_usaha')->on('tbl_jenis_bidang_usaha')
                  ->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('tbl_bidang_usaha');
        Schema::dropIfExists('tbl_jenis_bidang_usaha');
        Schema::dropIfExists('tbl_koperasi');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengguna extends Migration {
    public function up() {

        Schema::create('tbl_jenis_pekerjaan', function (Blueprint $table) {
            $table->increments('jenis_pekerjaan');
            $table->string('keterangan', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        Schema::create('tbl_anggota', function (Blueprint $table) {
            $table->increments('anggota_id');
            $table->unsignedInteger('koperasi_id')->nullable();
            $table->string('nik', 50)->nullable();
            $table->string('nama', 150)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 5)->nullable();
            $table->unsignedInteger('jenis_pekerjaan')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('koperasi_id')
                  ->references('koperasi_id')->on('tbl_koperasi')
                  ->nullOnDelete();

            $table->foreign('jenis_pekerjaan')
                  ->references('jenis_pekerjaan')->on('tbl_jenis_pekerjaan')
                  ->nullOnDelete();
        });
    }

    public function down() {
        // CHILD → PARENT
        Schema::dropIfExists('tbl_anggota');
        Schema::dropIfExists('tbl_jenis_pekerjaan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPinjaman extends Migration {
    public function up() {

        // 1. Jenis Pinjaman
        Schema::create('tbl_jenis_pinjaman', function (Blueprint $table) {
            $table->tinyIncrements('jenis_pinjaman');
            $table->string('nama_pinjaman', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        // 2. Status Pinjaman
        Schema::create('tbl_status_pinjaman', function (Blueprint $table) {
            $table->tinyIncrements('status_pinjaman');
            $table->string('keterangan', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        // 3. Pinjaman
        Schema::create('tbl_pinjaman', function (Blueprint $table) {
            $table->increments('pinjaman_id');
            $table->unsignedInteger('anggota_id')->nullable();
            $table->unsignedTinyInteger('jenis_pinjaman')->nullable();
            $table->date('tanggal')->nullable();
            $table->decimal('jumlah', 15, 2)->default(0);
            $table->unsignedTinyInteger('status_pinjaman')->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('anggota_id')
                ->references('anggota_id')->on('tbl_anggota')->nullOnDelete();
            $table->foreign('jenis_pinjaman')
                ->references('jenis_pinjaman')->on('tbl_jenis_pinjaman')->nullOnDelete();
            $table->foreign('status_pinjaman')
                ->references('status_pinjaman')->on('tbl_status_pinjaman')->nullOnDelete();
        });

        // 4. Angsuran
        Schema::create('tbl_angsuran', function (Blueprint $table) {
            $table->increments('angsuran_id');
            $table->date('tanggal')->nullable();
            $table->decimal('jumlah', 15, 2)->default(0);
            $table->unsignedInteger('pinjaman_id');
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('pinjaman_id')
                ->references('pinjaman_id')->on('tbl_pinjaman')->cascadeOnDelete();
        });
    }

    public function down() {

        // urutan drop harus CHILD → PARENT
        Schema::dropIfExists('tbl_angsuran');
        Schema::dropIfExists('tbl_pinjaman');
        Schema::dropIfExists('tbl_status_pinjaman');
        Schema::dropIfExists('tbl_jenis_pinjaman');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLokasi extends Migration {
    public function up() {
        Schema::create('tbl_provinsi', function (Blueprint $table) {
            $table->increments('prop_id');
            $table->string('nama', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        Schema::create('tbl_kabupaten', function (Blueprint $table) {
            $table->increments('kabu_id');
            $table->string('nama', 100)->nullable();
            $table->unsignedInteger('prop_id');
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('prop_id')
                ->references('prop_id')->on('tbl_provinsi')
                ->cascadeOnDelete();
        });

        Schema::create('tbl_kecamatan', function (Blueprint $table) {
            $table->increments('keca_id');
            $table->string('nama', 100)->nullable();
            $table->unsignedInteger('kabu_id');
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('kabu_id')
                ->references('kabu_id')->on('tbl_kabupaten')
                ->cascadeOnDelete();
        });

        Schema::create('tbl_desa', function (Blueprint $table) {
            $table->increments('desa_id');
            $table->string('nama', 100)->nullable();
            $table->unsignedInteger('keca_id');
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('keca_id')
                ->references('keca_id')->on('tbl_kecamatan')
                ->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('tbl_desa');
        Schema::dropIfExists('tbl_kecamatan');
        Schema::dropIfExists('tbl_kabupaten');
        Schema::dropIfExists('tbl_provinsi');
    }
};

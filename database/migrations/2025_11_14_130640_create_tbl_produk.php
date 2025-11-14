<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduk extends Migration
{
    public function up()
    {
        Schema::create('tbl_kategori_produk', function (Blueprint $table) {
            $table->increments('kategori_id');
            $table->string('keterangan', 150)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();
        });

        Schema::create('tbl_produk', function (Blueprint $table) {
            $table->increments('produk_id');
            $table->string('nama_produk', 150)->nullable();
            $table->unsignedInteger('kategori_id')->nullable();
            $table->decimal('harga_beli', 15, 2)->nullable();
            $table->decimal('harga_jual', 15, 2)->nullable();
            $table->integer('stok_saat_ini')->default(0);
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('kategori_id')
                ->references('kategori_id')->on('tbl_kategori_produk')
                ->nullOnDelete();
        });

        Schema::create('tbl_supplier', function (Blueprint $table) {
            $table->increments('supplier_id');
            $table->unsignedInteger('koperasi_id')->nullable();
            $table->string('nama', 150)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('koperasi_id')
                ->references('koperasi_id')->on('tbl_koperasi')
                ->nullOnDelete();
        });

        Schema::create('tbl_stok_barang', function (Blueprint $table) {
            $table->increments('stok_id');
            $table->unsignedInteger('koperasi_id')->nullable();
            $table->unsignedInteger('produk_id')->nullable();
            $table->integer('stok_masuk')->default(0);
            $table->integer('stok_keluar')->default(0);
            $table->integer('stok_sisa')->default(0);
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('koperasi_id')
                ->references('koperasi_id')->on('tbl_koperasi')
                ->nullOnDelete();
            $table->foreign('produk_id')
                ->references('produk_id')->on('tbl_produk')
                ->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_stok_barang');
        Schema::dropIfExists('tbl_supplier');
        Schema::dropIfExists('tbl_produk');
        Schema::dropIfExists('tbl_kategori_produk');
    }
}

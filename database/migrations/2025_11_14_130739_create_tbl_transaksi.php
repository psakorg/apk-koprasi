<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransaksi extends Migration {
    public function up() {

        Schema::create('tbl_pembelian', function (Blueprint $table) {
            $table->increments('pembelian_id');
            $table->unsignedInteger('koperasi_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->decimal('jumlah', 15, 2)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('koperasi_id')
                ->references('koperasi_id')->on('tbl_koperasi')->nullOnDelete();
            $table->foreign('supplier_id')
                ->references('supplier_id')->on('tbl_supplier')->nullOnDelete();
        });

        Schema::create('tbl_pembelian_detil', function (Blueprint $table) {
            $table->increments('detil_pembelian_id');
            $table->unsignedInteger('pembelian_id');
            $table->unsignedInteger('produk_id')->nullable();
            $table->integer('jumlah')->default(0);
            $table->decimal('harga', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('pembelian_id')
                ->references('pembelian_id')->on('tbl_pembelian')->cascadeOnDelete();
            $table->foreign('produk_id')
                ->references('produk_id')->on('tbl_produk')->nullOnDelete();
        });

        Schema::create('tbl_penjualan', function (Blueprint $table) {
            $table->increments('penjualan_id');
            $table->unsignedInteger('koperasi_id')->nullable();
            $table->unsignedInteger('anggota_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('koperasi_id')
                ->references('koperasi_id')->on('tbl_koperasi')->nullOnDelete();
            $table->foreign('anggota_id')
                ->references('anggota_id')->on('tbl_anggota')->nullOnDelete();
        });

        Schema::create('tbl_penjualan_detil', function (Blueprint $table) {
            $table->increments('detil_penjualan_id');
            $table->unsignedInteger('penjualan_id');
            $table->unsignedInteger('produk_id')->nullable();
            $table->integer('jumlah')->default(0);
            $table->decimal('harga', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamp('last_update')->nullable();
            $table->unsignedInteger('user_update')->nullable();

            $table->foreign('penjualan_id')
                ->references('penjualan_id')->on('tbl_penjualan')->cascadeOnDelete();
            $table->foreign('produk_id')
                ->references('produk_id')->on('tbl_produk')->nullOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('tbl_penjualan_detil');
        Schema::dropIfExists('tbl_penjualan');
        Schema::dropIfExists('tbl_pembelian_detil');
        Schema::dropIfExists('tbl_pembelian');
    }
}

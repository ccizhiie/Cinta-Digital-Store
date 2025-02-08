<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('pembelian_detail', function (Blueprint $table) {
      $table->id('id_pembelian_detail');
      $table->unsignedBigInteger('id_pembelian');
      $table->unsignedBigInteger('id_barang');
      // $table->foreignId('id_pembelian')->constrained('pembelian')->onDelete('cascade');
      // $table->foreignId('id_barang')->constrained('barang')->onDelete('cascade');
      $table->integer('jumlah_beli');
      $table->bigInteger('sub_total');
      $table->timestamps();

      $table->foreign('id_pembelian')->references('id_pembelian')->on('pembelian')->onDelete('cascade');
      $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pembelian_detail');
  }
};

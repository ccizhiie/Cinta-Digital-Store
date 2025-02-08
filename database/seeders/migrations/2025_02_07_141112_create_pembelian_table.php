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
    Schema::create('pembelian', function (Blueprint $table) {
      $table->id('id_pembelian');
      $table->unsignedBigInteger('id_supplier'); 
      $table->date('tgl_beli');
      $table->bigInteger('total');
      $table->timestamps();

      $table->foreign('id_supplier')->references('id_supplier')->on('supplier')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pembelian');
  }
};

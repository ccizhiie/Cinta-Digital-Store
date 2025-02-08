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
    Schema::create('penjualan', function (Blueprint $table) {
      $table->id('id_penjualan');
      $table->unsignedBigInteger('id_member');
      // $table->foreignId('id_member')->nullable()->constrained('member')->onDelete('set null');
      $table->datetime('waktu');
      $table->bigInteger('total_bayar');
      $table->enum('status', ['Dipesan', 'Dikirim', 'Diterima', 'Dibatalkan']);
      $table->timestamps();

      $table->foreign('id_member')->references('id_member')->on('member')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('penjualan');
  }
};

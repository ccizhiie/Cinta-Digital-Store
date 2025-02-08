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
      Schema::create('barang', function (Blueprint $table) {
        $table->id('id_barang');
        $table->string('nama_barang', 100);
        $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade');
        $table->text('keterangan');
        $table->integer('stok');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};

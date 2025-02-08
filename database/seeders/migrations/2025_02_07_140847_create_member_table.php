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
      Schema::create('member', function (Blueprint $table) {
        $table->id('id_member');
        $table->string('nama_member', 100);
        $table->string('email', 100)->unique();
        $table->string('telp', 20);
        $table->string('password', 20);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};

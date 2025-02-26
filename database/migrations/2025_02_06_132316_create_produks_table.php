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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('foto_produk')->nullable();
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable();
            $table->integer('harga_produk');
            $table->integer('stok_produk');
            $table->foreignId('kategori_id')->constrained('kategoris');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};

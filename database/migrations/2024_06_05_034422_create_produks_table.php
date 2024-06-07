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
            $table->id("produk_id");
            $table->string("nama_produk", 50);
            $table->integer("harga");
            $table->text("deskripsi");
            $table->string("images");
            $table->unsignedBigInteger("kategori_id");
            $table->timestamps();

            $table->foreign("kategori_id")->references("kategori_id")->on("kategoris")->cascadeOnDelete();
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

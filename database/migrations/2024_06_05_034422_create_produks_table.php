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
            $table->unsignedBigInteger("service_id");
            $table->timestamps();

            $table->foreign("service_id")->references("service_id")->on("services")->cascadeOnDelete();
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

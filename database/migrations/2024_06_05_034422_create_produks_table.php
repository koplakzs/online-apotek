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
            $table->unsignedBigInteger("service_id");
            $table->unsignedBigInteger("barang_id");
            $table->timestamps();

            $table->foreign("service_id")->references("service_id")->on("services")->cascadeOnDelete();
            $table->foreign("barang_id")->references("barang_id")->on("barangs")->cascadeOnDelete();
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

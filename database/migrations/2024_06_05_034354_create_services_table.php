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
        Schema::create('services', function (Blueprint $table) {
            $table->id("service_id");
            $table->string("nama_services", 50);
            $table->text("deskripsi");
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
        Schema::dropIfExists('services');
    }
};

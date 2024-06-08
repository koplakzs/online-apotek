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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id("profile_id");
            $table->string("nama", 50);
            $table->string("no_hp", 50);
            $table->text("moto");
            $table->unsignedBigInteger("id_user");
            $table->timestamps();
            $table->foreign("id_user")->references("id_user")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

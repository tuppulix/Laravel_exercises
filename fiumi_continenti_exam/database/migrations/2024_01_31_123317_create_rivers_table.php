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
        Schema::create('rivers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("mouth");
            $table->integer("length");
            $table->unsignedBigInteger("continent");
            $table->timestamps();
            $table->foreign("continent")->references("id")->on("continents")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rivers');
    }
};

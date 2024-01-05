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
        Schema::create('bicycles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('owner')->unsigned();
            $table->bigInteger('model')->unsigned();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('owner')->references('id')->on('users');
            $table->foreign('model')->references('id')->on('bike_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicycles');
    }
};

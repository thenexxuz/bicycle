<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bike_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('brand')->unsigned();
            $table->float('price')->unsigned();
            $table->string('description');
            $table->boolean('gender')->nullable();
            $table->bigInteger('category')->unsigned();
            $table->tinyInteger('wheel_size')->unsigned();
            $table->timestamps();

            $table->foreign('brand')->references('id')->on('brands');
            $table->foreign('category')->references('id')->on('categories');
        });

        DB::statement('ALTER TABLE `bike_models` ADD COLUMN accessories JSON NOT NULL DEFAULT (\'{}\')');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};

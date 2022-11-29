<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_measurements', function (Blueprint $table) {
            $table->unsignedBigInteger("recipes_id");
            $table->unsignedBigInteger("measurements_id");
            $table->foreign('recipes_id')->references('id')->on('recipes')->cascadeOnDelete();
            $table->foreign('measurements_id')->references('id')->on('measurements')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_measurements');
    }
};

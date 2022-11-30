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
        Schema::create('recipes_ingredients', function (Blueprint $table) {
            $table->unsignedBigInteger("recipes_id");
            $table->unsignedBigInteger("ingredients_id");
            $table->foreign('recipes_id')->references('id')->on('recipes')->cascadeOnDelete();
            $table->foreign('ingredients_id')->references('id')->on('ingredients')->cascadeOnDelete();
            // $table->timestamps();
        });
    }
 // Es gaidu 15% no tavas atzimes sev.
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_ingredients');
    }
};

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
        Schema::create('tv_series', function (Blueprint $table) {
            $table->string('name');
            $table->string('genre');
            $table->string('year');
            $table->string('director');
            $table->string('season');
            $table->string('episodes');
            $table->string('platform');
            $table->id();
            $table->timestamps();
        });

        Schema::table('tv_series', function (BluePrint $table) {
            $table->foreignId('director_id')->constrained('directors')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tv_series');
    }
};

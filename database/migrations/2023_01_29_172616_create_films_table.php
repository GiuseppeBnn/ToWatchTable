<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->string('name');
            $table->string('genre');
            $table->string('year');
            $table->string('director');
            $table->id();
            $table->timestamps();



        });
        Schema::table('films', function (Blueprint $table) {
           $table->foreignId('director_id')->constrained('directors')->onUpdate('cascade')->onDelete('cascade');});
    }


    public function down()
    {
        Schema::dropIfExists('films');
    }
};

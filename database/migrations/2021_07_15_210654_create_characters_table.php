<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{    
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('race_id');
            $table->integer('level')->default(1);
            $table->integer('HP');
            $table->integer('AC')->default(11); // can the default be a formula like 11 +
            $table->integer('death_saves')->default(0);
            $table->integer('base_str')->default(10);
            $table->integer('base_dex')->default(10);
            $table->integer('base_con')->default(10);
            $table->integer('base_wis')->default(10);
            $table->integer('base_int')->default(10);
            $table->integer('base_cha')->default(10);
            $table->string('first_class')->nullable();
            $table->json('proficiencies')->nullable();
            $table->json('expertise')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
}

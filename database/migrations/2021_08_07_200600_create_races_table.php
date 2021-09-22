<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('race');
            $table->string('subrace')->nullable;
            $table->string('size')->default('medium');
            $table->integer('walking_speed')->default(30);
            $table->integer('swim_speed')->nullable();
            $table->integer('str_mod')->default(0);
            $table->integer('dex_mod')->default(0);
            $table->integer('con_mod')->default(0);
            $table->integer('int_mod')->default(0);
            $table->integer('wis_mod')->default(0);
            $table->integer('cha_mod')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}

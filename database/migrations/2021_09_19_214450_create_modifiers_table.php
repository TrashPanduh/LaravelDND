<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModifiersTable extends Migration
{
    public function up()
    {
        Schema::create('modifiers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('base_value')->default(10);
            $table->integer('modifier')->default(0);
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('stats_pivot');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterItemsTable extends Migration
{

    public function up()
    {
        Schema::create('character_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('item_id');
            $table->integer('character_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('character_items');
    }
}

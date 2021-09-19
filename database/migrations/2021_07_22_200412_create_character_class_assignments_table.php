<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterClassAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_class_assignments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('character_id');
            $table->integer('character_class_id');
            $table->integer('class_level')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_class_assignments');
    }
}

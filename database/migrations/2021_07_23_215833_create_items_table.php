<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->float('weight')->default(1);
            $table->boolean('magical')->default(false);
            $table->string('magic_type')->nullable();
            $table->string('sub_type')->nullable();
            $table->integer('range')->nullable();
            $table->integer('max_range')->nullable();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('items');
    }
}

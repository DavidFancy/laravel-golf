<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('priority')->default(0);
            $table->integer('price');
            $table->string('address')->nullable();
            $table->string('introduction')->nullable();
            $table->string('coverImg')->nullable();
            $table->string('originalImg')->nullable();
            $table->date('date')->nullable();
            $table->boolean('availability')->default(false);
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
        Schema::dropIfExists('events');
    }
}

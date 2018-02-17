<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSevenPlayerValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seven_player_values', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('finish_position');
			$table->decimal('point_award');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seven_player_values');
    }
}

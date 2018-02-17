<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirteenPlayerValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirteen_player_values', function (Blueprint $table) {
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
        Schema::dropIfExists('thirteen_player_values');
    }
}

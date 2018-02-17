<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('game_type_id');
			$table->integer('game_weight_id');
			$table->integer('meet_id')->nullable();
			$table->integer('game_buy_in_id')->nullable();
			$table->integer('player_count_id')->nullable();
			$table->decimal('prize_pool')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}

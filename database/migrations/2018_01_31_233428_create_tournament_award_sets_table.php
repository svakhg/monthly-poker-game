<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentAwardSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_award_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			$table->string('first_finish_position');
			$table->decimal('first_point_award');
			$table->decimal('first_money_award');
			
			$table->string('second_finish_position');
			$table->decimal('second_point_award');
			$table->decimal('second_money_award');
			
			$table->string('third_finish_position');
			$table->decimal('third_point_award');
			$table->decimal('third_money_award');
			
			$table->string('fourth_finish_position');
			$table->decimal('fourth_point_award');
			$table->decimal('fourth_money_award');
			
			$table->string('fifth_finish_position');
			$table->decimal('fifth_point_award');
			$table->decimal('fifth_money_award');
			
			$table->string('sixth_finish_position')->nullable();
			$table->decimal('sixth_point_award')->nullable();
			$table->decimal('sixth_money_award')->nullable();
			
			$table->string('seventh_finish_position')->nullable();
			$table->decimal('seventh_point_award')->nullable();
			$table->decimal('seventh_money_award')->nullable();
			
			$table->string('eighth_finish_position')->nullable();
			$table->decimal('eighth_point_award')->nullable();
			$table->decimal('eighth_money_award')->nullable();
			
			$table->string('ninth_finish_position')->nullable();
			$table->decimal('ninth_point_award')->nullable();
			$table->decimal('ninth_money_award')->nullable();
			
			$table->string('tenth_finish_position')->nullable();
			$table->decimal('tenth_point_award')->nullable();
			$table->decimal('tenth_money_award')->nullable();
			
			$table->string('eleventh_finish_position')->nullable();
			$table->decimal('eleventh_point_award')->nullable();
			$table->decimal('eleventh_money_award')->nullable();
			
			$table->string('twelfth_finish_position')->nullable();
			$table->decimal('twelfth_point_award')->nullable();
			$table->decimal('twelfth_money_award')->nullable();
			
			$table->string('thirteenth_finish_position')->nullable();
			$table->decimal('thirteenth_point_award')->nullable();
			$table->decimal('thirteenth_money_award')->nullable();
			
			$table->string('fourteenth_finish_position')->nullable();
			$table->decimal('fourteenth_point_award')->nullable();
			$table->decimal('fourteenth_money_award')->nullable();
			
			$table->string('did_not_play');
			$table->decimal('did_not_play_point_award');
			$table->decimal('did_not_play_money_award');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_award_sets');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('user1_id');
            $table->unsignedInteger('team1_id');
            $table->unsignedInteger('user2_id');
            $table->unsignedInteger('team2_id');
            $table->date('date1');
            $table->unsignedInteger('turn1_id');
            $table->unsignedInteger('type1_id');
            $table->unsignedInteger('type2_id');
            $table->date('date2');
            $table->unsignedInteger('turn2_id');
            $table->unsignedInteger('type3_id');
            $table->unsignedInteger('type4_id');
            $table->unsignedInteger('situation_id');
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
        Schema::dropIfExists('exchanges');
    }
}

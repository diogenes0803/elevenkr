<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_rounds', function (Blueprint $table) {
            $table->id();
            $table->integer('home_score')->default(0);
            $table->integer('away_score')->default(0);
            $table->unsignedBigInteger('bgs_match_id');
            $table->timestamps();

            $table->foreign('bgs_match_id')->references('id')->on('bgs_matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_rounds');
    }
}

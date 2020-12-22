<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type')->unsigned();
            $table->bigInteger('archetype')->unsigned();
            $table->timestamps();
        });
        Schema::table('weapons', function ($table){
            $table->foreign('archetype')->references('id')->on('archetypes');
            $table->foreign('type')->references('id')->on('weapon_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}

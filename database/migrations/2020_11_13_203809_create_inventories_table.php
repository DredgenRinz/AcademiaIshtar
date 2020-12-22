<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fk_id_item')->unsigned();
            $table->bigInteger('fk_id_user')->unsigned();
            $table->boolean('isTracked');
            $table->boolean('isObtained');
            $table->timestamps();
        });
        Schema::table('inventories', function ($table){
            $table->foreign('fk_id_item')->references('id')->on('lore_items');
            $table->foreign('fk_id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}

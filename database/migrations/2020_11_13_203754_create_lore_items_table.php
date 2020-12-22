<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lore_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('quality');
            $table->text('item_lore');
            $table->string('drop_from');
            $table->text('img_url');
            $table->bigInteger('fk_id_seasons')->unsigned();
            $table->bigInteger('fk_id_weapon')->unsigned()->nullable();
            $table->bigInteger('fk_id_armor')->unsigned()->nullable();
            $table->bigInteger('fk_id_accessory')->unsigned()->nullable();
            $table->bigInteger('fk_id_book')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned();
            $table->timestamps();
        });
        Schema::table('lore_items', function ($table){
            $table->foreign('fk_id_seasons')->references('id')->on('seasons');
            $table->foreign('fk_id_weapon')->references('id')->on('weapons');
            $table->foreign('fk_id_armor')->references('id')->on('armors');
            $table->foreign('fk_id_accessory')->references('id')->on('accessories');
            $table->foreign('fk_id_book')->references('id')->on('lore_books');
            $table->foreign('updated_by')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lore_items');
    }
}

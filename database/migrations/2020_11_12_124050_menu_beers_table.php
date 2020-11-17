<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_beers', function (Blueprint $table) {
            $table->foreignId('menu_id')->references('id')->on('menus');
            $table->foreignId('beer_id')->references('id')->on('beers');
            $table->unique(['menu_id', 'beer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

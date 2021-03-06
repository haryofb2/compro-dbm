<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWMMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_m_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category')->unsigned();
            $table->string('link');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('w_m_menus', function (Blueprint $table) {
            $table->foreign('category')->references('id')->on('w_m_category_menus');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('w_m_menus');
    }
}
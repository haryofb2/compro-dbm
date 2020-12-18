<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->date('date');
            // $table->integer('cabang_id')->unsigned();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        // Schema::table('events', function (Blueprint $table) {
        //     $table->foreign('cabang_id')->references('id')->on('cabangs');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}

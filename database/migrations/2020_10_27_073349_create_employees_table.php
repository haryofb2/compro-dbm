<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('divition_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('cabang_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('quote')->nullable();
            $table->softDeletes();
            $table->timestamps();
            });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('divition_id')->references('id')->on('divitions');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('cabang_id')->references('id')->on('cabangs');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

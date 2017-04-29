<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stdroom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('std_id')->unsigned()->default(0);
            $table->integer('room_id')->unsigned()->default(0);
            $table->foreign('std_id')->references('std_id')->on('students')->onDelete('Cascade');
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('Cascade');
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
        Schema::dropIfExists('stdroom');
    }
}

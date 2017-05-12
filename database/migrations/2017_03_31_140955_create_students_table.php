<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('std_id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('contact');
            $table->string('address');
            $table->string('school');
            $table->string('father_name');
            $table->string('father_contact');
            $table->string('profile_pic');
            $table->foreign('user_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('students');
    }
}
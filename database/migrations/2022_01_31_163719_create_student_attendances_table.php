<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_classroom_id');
            $table->foreign('student_classroom_id')->references('id')->on('student_classrooms')->onDelete('cascade');

            $table->unsignedBigInteger('attendence_id');
            $table->foreign('attendence_id')->references('id')->on('attendances')->onDelete('cascade');
            
            $table->boolean('is_present');
            
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
        Schema::dropIfExists('student_attendances');
    }
}

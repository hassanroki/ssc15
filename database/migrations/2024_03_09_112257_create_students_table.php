<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentInfoId');
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->unsignedBigInteger('departmentId');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->unsignedBigInteger('genderId');
            $table->string('presentAddress');
            $table->string('permanentAddress');
            $table->string('photo')->nullable();
            $table->string('occupation');
            $table->string('organizationName');
            $table->string('designation');
            $table->string('guest');
            $table->string('password');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('studentInfoId')->references('id')->on('student_infos');
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->foreign('genderId')->references('id')->on('genders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

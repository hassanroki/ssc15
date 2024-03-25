<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('merits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('mobile')->Unique();
            $table->unsignedBigInteger('genderId');
            $table->string('address');
            $table->unsignedBigInteger('schoolId');
            $table->unsignedBigInteger('semesterId');
            $table->binary('photo')->nullable();
            $table->string('password');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('genderId')->references('id')->on('genders');
            $table->foreign('schoolId')->references('id')->on('institutes');
            $table->foreign('semesterId')->references('id')->on('semesters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merits');
    }
};

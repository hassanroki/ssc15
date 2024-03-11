<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'studentInfoId', 'name', 'fatherName', 'motherName', 'departmentId', 'email', 'mobile', 'genderId', 'presentAddress', 'permanentAddress', 'photo', 'occupation', 'organizationName', 'designation', 'guest', 'password'
    ];

    // Department Table Relationship
    public function department() {
        return $this->belongsTo(Department::class);
    }

    // Gender Table Relationship
    public function gender() {
        return $this->belongsTo(Gender::class);
    }

    // StudentInfo Table Relationship
    public function studentInfo() {
        return $this->belongsTo(StudentInfo::class);
    }
}

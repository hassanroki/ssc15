<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'roll',
        'studentName',
        'fatherName',
        'motherName',
    ];

    // Student Table Relationship
    public function student() {
        return $this->hasMany(Student::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'fatherName', 'motherName', 'mobile', 'genderId', 'address', 'schoolId', 'semesterId', 'photo', 'password'
    ];

    // Relation Gender Table
    public function genders() {
        return $this->belongsTo(Gender::class, 'genderId');
    }

    // Relation Institute Table
    public function institutes() {
        return $this->belongsTo(Institute::class, 'schoolId');
    }

    // Relation Semester Table
    public function semesters() {
        return $this->belongsTo(Semester::class, 'semesterId');
    }
}

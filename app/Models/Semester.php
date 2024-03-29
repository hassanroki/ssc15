<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'semesterName',
    ];

    // Relation Merit Table
    public function merits() {
        return $this->hasMany(Merit::class);
    }
}

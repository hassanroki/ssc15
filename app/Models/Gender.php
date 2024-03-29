<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'sex',
    ];

    // Relation Student Table
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Relation Merit Table
    public function merits() {
        return $this->hasMany(Merit::class);
    }

}

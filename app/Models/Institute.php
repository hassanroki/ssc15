<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = [
        'instituteName',
    ];

    // Relation Merit Table
    public function merits() {
        return $this->hasMany(Merit::class);
    }
}

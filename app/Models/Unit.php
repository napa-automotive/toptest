<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function testQuestions()
    {
        return $this->hasMany(TestQuestion::class);
    }
}

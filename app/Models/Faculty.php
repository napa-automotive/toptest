<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function testResults()
    {
        return $this->hasMany(FacultyTestResult::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function university(){
        return $this->belongsTo('\App\Models\University');
    }

    public function testResults(){
        return $this->hasMany('\App\Models\FacultyTestResult');
    }
}

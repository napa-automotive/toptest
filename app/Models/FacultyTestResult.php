<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyTestResult extends Model
{
    use HasFactory;

    public function faculties(){
        return $this->hasMany('\App\Models\Faculty');
    }
}

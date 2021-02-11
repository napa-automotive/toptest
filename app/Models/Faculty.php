<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function universities(){
        return $this->belongsTo('\App\Models\University');
    }

    public function ftestresults(){
        return $this->belongsTo('\App\Models\FacultyTestResult');
    }
}

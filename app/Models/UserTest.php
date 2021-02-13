<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('\App\Models\User');
    }

    public function userexams(){
        return $this->hasMany('\App\Models\UserExam');
    }
    public function userTestAnswer(){
        return $this->belongsTo('\App\Models\UserTestAnswer');
    }

    public function subject(){
        return $this->belongsTo('\App\Models\Subject');
    }
}

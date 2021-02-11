<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    use HasFactory;

    public function usertests(){
        return $this->hasMany('\App\Models\UserTest');
    }

    public function userexams(){
        return $this->belongsTo('\App\Models\User');
    }

    public function subjects(){
        return $this->belongsTo('\App\Models\Subject');
    }
}

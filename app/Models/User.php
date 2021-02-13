<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function userTests(){
        return $this->hasMany('\App\Models\UserTest');
    }

    public function userExams(){
        return $this->hasMany('\App\Models\UserExam');
    }
    public function userSetting(){
        return $this->belongsTo('\App\Models\UserSetting');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function usertest(){
        return $this->hasMany('\App\Models\UserTest');
    }

    public function userexams(){
        return $this->hasMany('\App\Models\UserExam');
    }
    public function usersettings(){
        return $this->hasMany('\App\Models\UserSetting');
    }
}

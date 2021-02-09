<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    public function subject(){
        return $this->hasMany(Subject::class);
    }
    public function testAnswer(){
        return $this->hasOne(UserTestAnswer::class);
    }
    public function userExam(){
        return $this->belongsTo(UserExam::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}

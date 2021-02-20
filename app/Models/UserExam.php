<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    use HasFactory;

    public function userTests(){
        return $this->hasMany(UserTest::class);
    }

    // public function users(){
    //     return $this->hasMany(User::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}

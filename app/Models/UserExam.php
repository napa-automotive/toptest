<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    use HasFactory;

    public function userTests(){
        return $this->hasMany(UserTest::class, 'exam_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

// Wrong relationship:
//     public function subjects(){
//         return $this->hasMany(Subject::class);
//     }
}

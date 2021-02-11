<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('\App\Models\UserTests');
    }

    public function userexams(){
        return $this->belongsTo('\App\Models\UserExam');
    }
    public function usertestanswers(){
        return $this->belongsTo('\App\Models\UserTestAnswer');
    }

    public function subjects(){
        return $this->belongsTo('\App\Models\Subject');
    }
}

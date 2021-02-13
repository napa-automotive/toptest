<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestAnswer extends Model
{
    use HasFactory;

    public function userTest (){
        return $this->belongsTo('\App\Models\UserTest');
    }
}

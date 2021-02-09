<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestAnswer extends Model
{
    use HasFactory;

    public function userTests(){
        return $this->hasMany(UserTest::class);
    }
}

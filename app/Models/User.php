<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function userTests()
    {
        return $this->hasMany(UserTest::class);
    }
    public function userExams()
    {
        return $this->hasMany(UserExam::class);
    }
    public function userSettings()
    {
        return $this->hasMany(UserSetting::class);
    }
}

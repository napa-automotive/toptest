<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function userExam()
    {
        return $this->belongsTo(UserExam::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

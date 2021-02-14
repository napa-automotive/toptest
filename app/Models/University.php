<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }
    public function faculties(){
        return $this->hasMany(Faculty::class);
    }
}

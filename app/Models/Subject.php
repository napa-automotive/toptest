<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function subfields(){
        return $this->hasMany(Subfield::class);
    }
    public function userSubject(){
    return $this->belongsTo(UserSubject::class);
}
    public function userExam(){
    return $this->belongsTo(UserExam::class);
}
    public function userTests(){
    return $this->hasMany(UserTest::class);
}}

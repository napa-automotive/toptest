<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable= [
      'language_id', 'name', 'description', 'image', 'thumbnail',
    ];

    public function subfields () {
        return $this->hasMany('\App\Models\Subfield');
    }

    public function languages (){
        return $this->belongsTo('\App\Models\Language');
    }

    public function userSubject(){
        return $this->hasMany('\App\Models\UserSubject');
    }

    public function userExams(){
        return $this->hasMany('\App\Models\UserExam');
    }

    public function usertests(){
        return $this->hasMany('\App\Models\UserTest');
    }
}

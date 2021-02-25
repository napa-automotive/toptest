<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestAnswer extends Model
{
    use HasFactory;

    public function userTest(){
        return $this->belongsTo(UserTest::class, 'test_id');
    }
    
    // #todo: create relationships for `question_id` and `option_id`
}

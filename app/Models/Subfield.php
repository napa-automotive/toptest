<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfield extends Model
{
    use HasFactory;

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function subfield()
    {
        return $this->belongsTo(Subfield::class);
    }
    public function units()
    {
        return$this->hasMany(Unit::class);
    }
}

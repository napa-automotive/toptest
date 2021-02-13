<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'subfield_id', 'name', 'description',
    ];

    public function subfield(){
        return $this->belongsTo('\App\Models\Subfield');
    }

    public function units(){
        return $this->hasMany('\App\Models\Unit');
    }
}



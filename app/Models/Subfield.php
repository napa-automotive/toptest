<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfield extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id', 'name', 'description', 'image', 'thumbnail',
    ];

    public function chapters () {
        return $this -> hasMany('\App\Models\Chapter');
    }
    public function subjects () {
        return$this-> belongsTo('\App\Models\Subject', 'subject_id')->withDefault();
    }
}

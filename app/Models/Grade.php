<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function user() {
        return $this->belongsTo('App\Models\User');
    }


    public function lesson() {
        return $this->belongsTo('App\Models\Lesson');
    }
}

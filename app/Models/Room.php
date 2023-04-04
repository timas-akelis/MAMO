<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }


    public function school() {
        return $this->belongsTo('App\Models\School');
    }
}

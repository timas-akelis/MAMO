<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users() {
        return $this->hasMany('App\Models\User');
    }

    public function rules() {
        return $this->hasMany('App\Models\Rule');
    }

    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }

    public function timetables() {
        return $this->hasMany('App\Models\Timetable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }

    public function group() {
        return $this->belongsTo('App\Models\Group');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

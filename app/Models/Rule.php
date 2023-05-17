<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function school() {
        return $this->belongsTo('App\Models\School');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

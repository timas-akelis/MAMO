<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function school() {
        return $this->belongsTo('App\Models\School');
    }

    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }
    public function end()
    {
        // Convert start time to seconds
        $startSeconds = strtotime($this->start);

        // Add duration to start time
        $endSeconds = $startSeconds + ($this->length * 60);

        // Convert end time to HH:MM:SS format
        return date('H:i:s', $endSeconds);
    }
}

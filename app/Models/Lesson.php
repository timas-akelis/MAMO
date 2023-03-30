<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // protected $table = 'name_of_table' jei blogas db lenteles pavadinimas, ji galima pakeisti
    public $primaryKey = 'id'; //man atrodo nebutina irgi, id yra default
    public $timestamps = false; //jei nera timestamps (created_at updated_at) sita eilute butina

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

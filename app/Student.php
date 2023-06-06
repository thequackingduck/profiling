<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function schoolyear(){
        return $this->belongsTo('App\Schoolyear');
    }

    public function course(){
        return $this->belongsTo('App\Course');
    }
}

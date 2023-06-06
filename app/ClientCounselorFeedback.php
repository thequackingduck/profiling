<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientCounselorFeedback extends Model
{
    public function schoolyear(){
        return $this->belongsTo('App\Schoolyear');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NeedsAssessmentInventory extends Model
{
    public function schoolyear(){
        return $this->belongsTo('App\Schoolyear');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function tabletwo(){
        return $this->hasOne('App\Needassessmenttabletwo');
    }

    public function tablethree(){
        return $this->hasOne('App\Needassessmenttablethree');
    }

    public function tablefour(){
        return $this->hasOne('App\Needassessmenttablefour');
    }
}

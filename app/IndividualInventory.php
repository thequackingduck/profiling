<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualInventory extends Model
{
    public function schoolyear(){
        return $this->belongsTo('App\Schoolyear');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function tabletwo(){
        return $this->hasOne('App\IndividualInventorytwo');
    }

    public function tablethree(){
        return $this->hasOne('App\IndividualInventoryThree');
    }

    public function tablefour(){
        return $this->hasOne('App\IndividualInventoryFour');
    }
}

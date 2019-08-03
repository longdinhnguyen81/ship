<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'cost', 'type', 'picture', 'hotel_id'];

    public function hotel(){
    	return $this->belongsTo('App\Model\Hotel', 'hotel_id');
    }
    public function checkhotel(){
    	return $this->hasMany('App\Model\Checkhotel');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'url', 'hotel_id'];

    public function hotel(){
    	return $this->belongsTo('App\Model\Hotel');
    }
}

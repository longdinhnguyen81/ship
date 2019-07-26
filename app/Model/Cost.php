<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public $timestamps = false;
    public $fillable = ['time', 'train_from', 'train_to', 'train_id'];

    public function train(){
    	return $this->belongsTo('App\Model\Train');
    }

    public function client(){
    	return $this->belongsToMany('App\Model\Client');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = true;
    public $fillable = ['fullname', 'cmnd', 'phone', 'email', 'day', 'time', 'ticket', 'type', 'active'];

    public function cost(){
    	return $this->belongsToMany('App\Model\Cost');
    }

    public function train(){
    	return $this->belongsTo('App\Model\Train');
    }
}

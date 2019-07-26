<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientCost extends Model
{
    public $timestamps = false;
    public $fillable = ['client_id', 'cost_id'];

    public function client(){
    	return $this->belongsTo('App\Model\Client');
    }
    public function cost(){
    	return $this->belongsTo('App\Model\Cost');
    }
}

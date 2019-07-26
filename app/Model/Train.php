<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public $timestamps = true;
    public $fillable = ['name', 'description', 'detail', 'cost', 'picture', 'active'];

    public function cost(){
    	return $this->hasMany('App\Model\Cost');
    }

    public function client(){
    	return $this->hasMany('App\Model\Client');
    }
}

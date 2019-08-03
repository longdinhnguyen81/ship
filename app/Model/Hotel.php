<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = true;
    public $fillable = ['name', 'keywords', 'description', 'detail', 'picture', 'cost', 'active'];

    public function pictures(){
    	return $this->hasMany('App\Model\Picture');
    }
    public function type(){
    	return $this->hasMany('App\Model\Type');
    }
}

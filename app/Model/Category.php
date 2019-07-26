<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'slug_name', 'parent_id'];

    public function detail(){
    	return $this->hasMany('App\Model\Detail');
    }
}

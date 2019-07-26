<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $timestamps = true;
    public $fillable = ['title', 'keywords', 'description', 'detail', 'picture', 'active'];

    public function category(){
    	return $this->belongsTo('App\Model\Category');
    }
}

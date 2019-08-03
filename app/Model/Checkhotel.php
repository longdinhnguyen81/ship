<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checkhotel extends Model
{
    public $timestamps = true;
    public $fillable = ['username', 'phone', 'date', 'number', 'type_id', 'active'];

    public function type(){
    	return $this->belongsTo('App\Model\Type');
    }
}

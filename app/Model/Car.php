<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = true;
    public $fillable = ['name', 'keywords', 'description', 'detail', 'picture', 'active'];
}

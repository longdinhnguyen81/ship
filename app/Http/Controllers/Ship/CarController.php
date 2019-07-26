<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){
    	return view('ship.car.index');
    }
    public function detail(){
    	return view('ship.car.detail');
    }
}

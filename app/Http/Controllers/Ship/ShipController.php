<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShipController extends Controller
{
    public function index(){
    	return view('ship.ship.index');
    }
    public function cart(){
    	return view('ship.ship.cart');
    }
    public function thank(){
    	return view('ship.ship.thank');
    }
}

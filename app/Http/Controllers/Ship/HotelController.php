<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function index(){
    	return view('ship.hotel.index');
    }
    public function detail(){
    	return view('ship.hotel.detail');
    }
}

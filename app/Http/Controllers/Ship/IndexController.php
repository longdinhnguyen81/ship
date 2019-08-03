<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Car;
use App\Model\Hotel;

class IndexController extends Controller
{
    public function index(){
    	$cars = Car::where('active', 1)->limit(3)->get();
    	$hotels = Hotel::where('active', 1)->limit(3)->get();
    	return view('ship.index.index', compact('cars', 'hotels'));
    }
    public function about(){
    	return view('ship.index.about');
    }
}

<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('ship.index.index');
    }
    public function about(){
    	return view('ship.index.about');
    }
}

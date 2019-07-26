<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
    	return view('ship.blog.index');
    }
    public function detail(){
    	return view('ship.blog.detail');
    }
}

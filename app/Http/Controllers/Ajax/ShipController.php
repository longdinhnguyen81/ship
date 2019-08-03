<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShipController extends Controller
{
    public function delete(Request $request){
    	$id = $request->id;
    	$carts = $request->session()->get('cart');
    	unset($carts[$id]);
    	$request->session()->put('cart', $carts);
    	return '';
    }
    public function deleteHotel(Request $request){
    	$id = $request->id;
    	$hotels = $request->session()->get('hotel');
    	unset($hotels[$id]);
    	$request->session()->put('hotel', $hotels);
    	return '';
    }
}

<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Hotel;
use App\Model\Detail;
use App\Model\Type;
use App\Model\Checkhotel;
use Session;

class HotelController extends Controller
{
    public function index(){
    	$details = Detail::where('active', 1)->orderBy('id','desc')->limit(3)->get();
    	$hotels = Hotel::where('active', 1)->get();
    	return view('ship.hotel.index', compact('hotels', 'details'));
    }

    public function detail($slug, Request $request){
    	$name = str_replace('-', ' ', $slug);
    	$hotel = Hotel::where('name', 'like', '%'. $name. '%')->with('pictures')->with('type')->first();
    	if(!$hotel){
    		return redirect()->route('ship.hotel.index');
    	}
    	return view('ship.hotel.detail', compact('hotel'));
    }

    public function cart($id, Request $request){
        $cart = $request->session()->get('hotel');
        $types = Type::with('hotel')->find($id);
        if(!$types){
            return redirect()->back();
        }
        if(!isset($cart[$id])){
            $cart[$id]['id'] = $id;
            $cart[$id]['hotel'] = $types->hotel->name;
            $cart[$id]['count'] = $request->count;
            $cart[$id]['name'] = $types->name;
            $cart[$id]['cost'] = $types->cost;
            $cart[$id]['type'] = $types->type;
        }else{
            $cart[$id]['count'] += $request->count;
        }
        $request->session()->put('hotel', $cart);
        return redirect()->back();
    }
    public function checkout(Request $request){
        $request->validate([
            'username' => 'required',
            'phone' => 'required',
            'dates' => 'required',
            'number' => 'required',
        ]);
        $checkout = new Checkhotel([
            'username' => $request->username,
            'phone' => $request->phone,
            'date' => $request->dates,
            'number' => $request->number,
            'type_id' => $request->type_id,
        ]);
        $checkout->save();
        $types = Type::find($request->type_id);
        $hotels = array(
            'id' => $checkout->id,
            'username' => $request->username,
            'phone' => $request->phone,
            'date' => $request->dates,
        );
        $request->session()->put('checkhotel', $hotels);
        return redirect()->route('ship.hotel.thank');
    }

    public function thank(Request $request){
        if(!$request->session()->get('hotel')){
            return redirect()->route('ship.index.index');
        }
        return view('ship.hotel.thank');
    }
}

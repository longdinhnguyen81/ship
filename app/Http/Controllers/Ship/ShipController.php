<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookTicketRequest;
use App\Model\Cost;
use App\Model\Client;
use App\Model\ClientCost;
use Toast;
use Session;

class ShipController extends Controller
{
    public function index(Request $request, $slug){
    	$date = $request->dates;
    	$ticket = $request->ticket;
    	if(is_string($ticket) && !is_numeric($ticket)){
    		return redirect()->route('ship.index.index');
    	}
    	
    	if(!$date){
            $date = strtotime("+1 day", time());
            $dates = date('m/d/Y',$date);
        }else{
            $dates = $date;
        }
        if(preg_match("/[a-z]/i", $dates)){
			toast()->error('Sai định dạng ngày tháng');
		    return redirect()->route('ship.index.index');
		}
    	$from = 'Cảng Sa Kỳ';
    	if($slug){
    		$string = substr($slug, 0, 10);
    		$froms = str_replace('-', ' ', $string);
    		$from = str_replace('d', 'đ', $froms);
    	}
    	$ships = Cost::with('train')->where('train_from', 'like', '%'. $from. '%')->get();
    	if(count($ships) == 0){
			toast()->error('Sai đường dẫn URL');
		    return redirect()->route('ship.index.index');
    	}
    	return view('ship.ship.index', compact('ships', 'ticket', 'dates'));
    }
    
    public function getCart(Request $request){
        $session = $request->session()->get('cart');
        if(!$session){
			toast()->error('Lỗi giỏ hàng rỗng');
    		return redirect()->route('ship.index.index');
        }
    	return view('ship.ship.cart');
    }

    public function cart(Request $request){
    	$ticket = $request->ticket;
    	$cost_id = $request->cost_id;
    	$date = $request->date;
    	
    	if(!$ticket){
    		$ticket = 1;
    	}

    	$cost = Cost::with('train')->find($cost_id);
    	if(!$cost){
			toast()->error('Lỗi chuyến đi');
    		return redirect()->route('ship.index.index');
    	}
        $session = $request->session()->get('cart');

        if(!isset($session[$cost_id])){
        	$session[$cost_id]['id'] = $cost_id;
        	$session[$cost_id]['ticket'] = $ticket;
        	$session[$cost_id]['date'] = $date;
        	$session[$cost_id]['cost'] = $cost->cost;
        	$session[$cost_id]['train_from'] = $cost->train_from;
        	$session[$cost_id]['train_to'] = $cost->train_to;
        	$session[$cost_id]['time'] = $cost->time;
        	$session[$cost_id]['name'] = $cost->train->name;
        	$session[$cost_id]['train_id'] = $cost->train->id;
        }else{
                $session[$cost_id]['ticket'] += $ticket;
        }
        //dd($session);
        $request->session()->put('cart', $session);
    	return redirect()->route('ship.ship.cart');
    }

    public function updateCart(Request $request){
    	$carts = $request->session()->get('cart');
    	foreach($carts as $cart){
    		$id = $cart['id'];
    		$ticket = 'ticket-'.$id;
    		$number = $request->$ticket;
    		if($number){
    			$carts[$id]['ticket'] = $number;
    		}
    	}
		$request->session()->put('cart', $carts);
		return redirect()->route('ship.ship.cart');
    }

    public function thank(Request $request){
        if(!$request->session()->get('cart')){
            return redirect()->route('ship.index.index');
        }
    	return view('ship.ship.thank');
    }

    public function payment(BookTicketRequest $request){
    	$request->validate([
    		'name' => 'required',
    		'cmnd' => 'required',
    		'phone' => 'required',
    		'email' => 'required',
    	]);
        $sessions = $request->session()->get('cart');
        $date = "";
        $ticket = "";
        $train_id = "";
        $date = "";
        foreach($sessions as $session){
        	$date .= $session['date'].';';
        	$ticket .= $session['ticket'].';';
        	$train_id .= $session['train_id'].';';
        	$date .= $session['date'].';';
        }
    	$clients = new Client([
    		'fullname' => $request->name,
    		'cmnd' => $request->cmnd,
    		'phone' => $request->phone,
    		'email' => $request->email,
    		'day' => $date,
    		'type' => $request->type,
    		'ticket' => $ticket,
    	]);
    	$clients->train_id = $train_id;
    	$clients->save();
    	foreach($sessions as $session){
			$clientcost = new ClientCost([
		    		'client_id' => $clients->id,
		    		'cost_id' => $session['id'],
			]);
			$clientcost->save();
    	}
        $cart = array(
            'id' => $clients->id,
            'fullname' => $request->name,
            'cmnd' => $request->cmnd,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
        );
        $sessions = $request->session()->put('checkout', $cart);
    	return redirect()->route('ship.ship.thank');
    }
}

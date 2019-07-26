<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\ClientCost;

class ClientController extends Controller
{
    public function index(){
    	$clients = Client::with('cost')->with('train')->get();
    	return view('admin.client.index', compact('clients'));
    }
    public function delete($id){
    	$clients = Client::find($id);
    	$clients->delete();
    	$costs = ClientCost::where('client_id', $id)->get();
    	foreach($costs as $cost){
    		$cost->delete();
    	}
    	return redirect()->route('admin.client.index')->with('msg', 'Xoá thành công');
    }
}

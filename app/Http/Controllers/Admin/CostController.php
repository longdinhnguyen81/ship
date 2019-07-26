<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cost;

class CostController extends Controller
{
    public function getAdd($id){
    	return view('admin.cost.add', compact('id'));
    }
    public function postAdd(Request $request, $id){
    	$request->validate([
    		'time' => 'required',
    		'train_from' => 'required',
    		'train_to' => 'required',
            'cost' => 'required',
    	]);
    	$cost = new Cost([
            'time' => $request->time,
    		'train_from' => $request->train_from,
    		'train_to' => $request->train_to,
    		'train_id' => $id,
    	]);
        $cost->cost = $request->cost;
    	$cost->save();
        
    	return redirect(route('admin.train.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id, $cid){
    	$cost = Cost::where('id', $cid)->where('train_id', $id)->first();
    	return view('admin.cost.edit', compact('cost', 'id', 'cid'));
    }
    public function postEdit(Request $request, $id, $cid){
    	$request->validate([
    		'time' => 'required',
            'train_from' => 'required',
            'train_to' => 'required',
            'cost' => 'required',
    	]);
    	$costs = Cost::where('id', $cid)->where('train_id', $id)->first();

    	$costs->time = $request->time;
        $costs->train_from = $request->train_from;
        $costs->train_to = $request->train_to;
        $costs->cost = $request->cost;

    	$costs->update();

        
    	return redirect(route('admin.train.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id, $cid){
    	$costs = Cost::where('id', $cid)->where('train_id', $id)->first();
    	$costs->delete();
    	return redirect(route('admin.train.index'))->with('msg', 'Xoá thành công');
    }
}

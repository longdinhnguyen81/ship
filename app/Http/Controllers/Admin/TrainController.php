<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Train;

class TrainController extends Controller
{
    public function index(){
    	$trains = Train::orderBy('id', 'desc')->get();
    	return view('admin.train.index', compact('trains'));
    }
    public function getAdd(){
    	return view('admin.train.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:trains',
            'description' => 'required',
    		'picture' => 'required',
    	]);
    	$travel = new Train([
    		'name' => $request->name,
            'description' => $request->description,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $travel->picture = $picture;
        }
    	$travel->save();
    	
    	return redirect(route('admin.train.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$train = Train::where('id', $id)->first();
    	return view('admin.train.edit', compact('train'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:trains,name,'.$id,
            'description' => 'required',
    	]);
    	$train = Train::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$train->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $train->picture = $picture;
        }

    	$train->name = $request->name;
    	$train->description = $request->description;
    	$train->update();
        
    	return redirect(route('admin.train.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$trains = Train::with('cost')->find($id);
        foreach($trains->cost as $train){
            $train->delete();
        }
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$trains->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$trains->delete();
    	return redirect(route('admin.train.index'))->with('msg', 'Xoá thành công');
    }
}

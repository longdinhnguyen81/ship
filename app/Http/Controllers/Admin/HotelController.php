<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Hotel;

class HotelController extends Controller
{
    public function index(){
    	$hotels = Hotel::orderBy('id', 'desc')->get();
    	return view('admin.hotel.index', compact('hotels'));
    }
    public function getAdd(){
    	return view('admin.hotel.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:hotels',
            'description' => 'required',
            'keywords' => 'required',
            'detail' => 'required',
    		'picture' => 'required',
    	]);
    	$hotels = new Hotel([
    		'name' => $request->name,
            'description' => $request->description,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $hotels->picture = $picture;
        }
    	$hotels->keywords = $request->keywords;
    	$hotels->detail = $request->detail;
    	$hotels->save();
    	
    	return redirect(route('admin.hotel.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$hotel = Hotel::where('id', $id)->first();
    	return view('admin.hotel.edit', compact('hotel'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:hotels,name,'.$id,
            'description' => 'required',
            'keywords' => 'required',
            'detail' => 'required',
    	]);
    	$hotel = Hotel::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$hotel->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $hotel->picture = $picture;
        }

    	$hotel->name = $request->name;
    	$hotel->keywords = $request->keywords;
    	$hotel->detail = $request->detail;
    	$hotel->description = $request->description;
    	$hotel->update();
        
    	return redirect(route('admin.hotel.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$hotel = Hotel::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$hotel->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$hotel->delete();
    	return redirect(route('admin.hotel.index'))->with('msg', 'Xoá thành công');
    }
}

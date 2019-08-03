<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Hotel;
use App\Model\Type;
use App\Model\Picture;

class HotelController extends Controller
{
    public function index(){
    	$hotels = Hotel::orderBy('id', 'desc')->with('type')->get();
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
            'cost' => 'required',
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
        $hotels->cost = $request->cost;
    	$hotels->save();

    	if($request->file('files') != null){
            foreach($request->file('files') as $files){
                $addpicture = New Picture();
                $name= $files->getClientOriginalName();
                $files->move(public_path().'/upload/', $name);  
                $addpicture->name = $name;
                $addpicture->url = $hotels->name;
                $addpicture->hotel_id = $hotels->id;
                $addpicture->save();
            }
        }

    	return redirect(route('admin.hotel.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$hotel = Hotel::where('id', $id)->first();
        $pictures = Picture::where('hotel_id', $id)->get();
    	return view('admin.hotel.edit', compact('hotel', 'pictures'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:hotels,name,'.$id,
            'description' => 'required',
            'keywords' => 'required',
            'detail' => 'required',
            'cost' => 'required',
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
        $hotel->cost = $request->cost;
    	$hotel->description = $request->description;
    	$hotel->update();
        if($request->file('files') != null){
            foreach($request->file('files') as $files){
                $addpicture = New Picture();
                $name= $files->getClientOriginalName();
                $files->move(public_path().'/upload/', $name);  
                $addpicture->name = $hotel->name;
                $addpicture->url = $name;
                $addpicture->hotel_id = $id;
                $addpicture->save();
            }
        }
        
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

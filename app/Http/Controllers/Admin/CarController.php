<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Car;

class CarController extends Controller
{
    public function index(){
    	$cars = Car::orderBy('id', 'desc')->get();
    	return view('admin.car.index', compact('cars'));
    }
    public function getAdd(){
    	return view('admin.car.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:cars',
            'description' => 'required',
            'keywords' => 'required',
            'detail' => 'required',
    		'picture' => 'required',
    	]);
    	$cars = new Car([
    		'name' => $request->name,
            'description' => $request->description,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $cars->picture = $picture;
        }
    	$cars->keywords = $request->keywords;
    	$cars->detail = $request->detail;
    	$cars->save();
    	
    	return redirect(route('admin.car.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$car = Car::where('id', $id)->first();
    	return view('admin.car.edit', compact('car'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:cars,name,'.$id,
            'description' => 'required',
            'keywords' => 'required',
            'detail' => 'required',
    	]);
    	$car = Car::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$car->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $car->picture = $picture;
        }

    	$car->name = $request->name;
    	$car->keywords = $request->keywords;
    	$car->detail = $request->detail;
    	$car->description = $request->description;
    	$car->update();
        
    	return redirect(route('admin.car.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$car = Car::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$car->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$car->delete();
    	return redirect(route('admin.car.index'))->with('msg', 'Xoá thành công');
    }
}

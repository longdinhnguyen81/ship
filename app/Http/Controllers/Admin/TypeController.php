<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Type;

class TypeController extends Controller
{
    public function getAdd($id){
    	return view('admin.type.add', compact('id'));
    }
    public function postAdd(Request $request, $id){
    	$request->validate([
    		'name' => 'required|unique:types',
            'type' => 'required',
            'cost' => 'required',
    		'picture' => 'required',
    	]);
    	$type = new Type([
    		'name' => $request->name,
    		'cost' => $request->cost,
    		'type' => $request->type,
    		'hotel_id' => $id,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $type->picture = $picture;
        }
        $type->save();
    	return redirect()->route('admin.hotel.index')->with('msg', 'Thêm thành công');
    }
    public function getEdit($id, $cid){
    	$type = Type::find($cid);
    	return view('admin.type.edit', compact('id', 'type'));
    }
    public function postEdit(Request $request, $id, $cid){
    	$request->validate([
    		'name' => 'required|unique:types,name,'.$cid,
            'type' => 'required',
            'cost' => 'required',
    	]);
    	$type = Type::find($cid);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$type->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $type->picture = $picture;
        }
        $type->name = $request->name;
        $type->type = $request->type;
        $type->cost = $request->cost;
        $type->save();
    	return redirect()->route('admin.hotel.index')->with('msg', 'Sửa thành công');
    }
    public function delete($id, $cid){
    	$type = Type::find($cid);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$type->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
        $type->delete();
    	return redirect()->route('admin.hotel.index')->with('msg', 'Xóa thành công');
    }
}

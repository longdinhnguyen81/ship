<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.category.index', compact('categories'));
    }

    public function getAdd(){
    	return view('admin.category.add');
    }

    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required',
    	]);
    	$category = new Category([
    		'name' => $request->name,
    		'slug_name' => str_slug($request->name),
    	]);
    	$category->save();
    	return redirect()->route('admin.category.index')->with('msg', 'Thêm thành công');
    }

    public function getEdit($id){
    	$category = Category::find($id);
    	return view('admin.category.edit', compact('category'));
    }

    public function postEdit(Request $request, $id){
    	$request->validate([
    		'name' => 'required',
    	]);
    	$category = Category::find($id);
    	$category->name = $request->name;
    	$category->slug_name = str_slug($request->name);
    	$category->save();
    	return redirect()->route('admin.category.index')->with('msg', 'Sửa thành công');
    }

    public function delete($id){
    	$category = Category::find($id);
    	$category->delete();
    	return redirect()->route('admin.category.index')->with('msg', 'Xóa thành công');
    }
}

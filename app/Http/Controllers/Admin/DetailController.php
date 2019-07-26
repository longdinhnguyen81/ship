<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Category;

class DetailController extends Controller
{
    public function index(){
    	$details = Detail::orderBy('id', 'desc')->paginate(10);
    	return view('admin.detail.index', compact('details'));
    }
    public function getAdd(){
    	$categories = Category::all();
    	return view('admin.detail.add', compact('categories'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:details',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
            'picture' => 'required',
    	]);
    	$detail = new Detail([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    	]);

        if($request->file('picture') != null){
                $path1 = $request->file('picture');
                $picture =  $path1->store('/', ['disk' => 'upload']);
                $detail->picture = $picture;
            
        }
        $detail->keywords = $request->keywords;
        $detail->category_id = $request->category_id;
    	$detail->save();
        

    	return redirect(route('admin.detail.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$categories = Category::all();
    	$detail = Detail::where('id', $id)->with('category')->first();
    	return view('admin.detail.edit', compact('detail', 'categories'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:details,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    	]);
    	$news = Detail::where('id', $id)->first();
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$news->picture;
            $news->picture = $picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
        }

    	$news->title = $request->title;
    	$news->keywords = $request->keywords;
    	$news->description = $request->description;
        $news->detail = $request->detail;
        

    	$news->update();

        
    	return redirect(route('admin.detail.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$news = Detail::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$news->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$news->delete();
    	return redirect(route('admin.detail.index'))->with('msg', 'Xoá thành công');
    }
}

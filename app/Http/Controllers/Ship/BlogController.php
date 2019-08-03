<?php

namespace App\Http\Controllers\Ship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Category;

class BlogController extends Controller
{
    public function index(){
    	$blogs = Detail::where('active', 1)->paginate(8);
    	return view('ship.blog.index', compact('blogs'));
    }
    public function search(Request $request){
    	$slug = $request->name;
    	$name = str_replace('-', ' ', $slug);
    	$blogs = Detail::where('active', 1)->where('title', 'like', '%'.$name.'%')->paginate(8);
    	return view('ship.blog.search', compact('blogs'));
    }
    public function blog($slug){
    	$name = str_replace('-', ' ', $slug);
    	$blogs = Category::where('name', 'like', '%'.$name.'%')->with(array('detail' => function($query)
        {
             $query->where('active', 1);
        }))->first();
    	return view('ship.blog.blog', compact('blogs'));
    }
    public function detail($slug, $id){
    	$blogs = Detail::with('category')->find($id);
	    $previous = Detail::where('id', '<', $id)->first();
	    $nexts = Detail::where('id', '>', $id)->first();
    	if(!$blogs){
    		return redirect()->route('ship.blog.index');
    	}
    	return view('ship.blog.detail', compact('blogs', 'previous', 'nexts'));
    }
}

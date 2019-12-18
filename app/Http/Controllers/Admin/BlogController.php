<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Blog;

class BlogController extends Controller
{
	public function getBlogsList(){
		$blogs = Blog::orderBy('created_at','DESC')->get();
		return view('admin.blogs.allblogs',compact('blogs'));
	}

	public function addBlog(){
		return view('admin.blogs.add-blog');

	}

	public function createBlog(Request $request){
		$blog = new Blog;

        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/blogs-img/', time().$file->getClientOriginalName());
           $blog->image_url=time().$file->getClientOriginalName();           
        }
        $blog->short_title = $request->short_title;
        $blog->long_title = $request->long_title;
        $blog->description = $request->description;
        $blog->author_name = $request->author_name;
        $blog->slug = strtolower(str_replace(' ', '-', $request->author_name));
        $blog->date = date('Y-m-d');
        $blog->status = $request->status;
        $blog->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editBlog($id){
		$blog = Blog::find($id);
		return view('admin.blogs.edit-blog',compact('blog'));

	}

	public function updateBlog(Request $request,$id){

		$blog = Blog::find($id);
		$date = $blog->date;

		 // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/blogs-img/', $file->getClientOriginalName());
           $blog->image_url=$file->getClientOriginalName();           
        }
        $blog->short_title = $request->short_title;
        $blog->long_title = $request->long_title;
        $blog->description = $request->description;
        $blog->author_name = $request->author_name;
        $blog->slug = strtolower(str_replace(' ', '-', $request->author_name));
        $blog->date = $date;
        $blog->status = $request->status;
        $blog->update();

        return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteBlog($id){
		$blog = Blog::find($id);
        $blog->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedBlog(Request $request){
        $blog = $request->keyword;

        $blogs = Blog::where('short_title','LIKE','%' .$blog. '%')->orWhere('long_title','LIKE','%' .$blog. '%')->orWhere('description','LIKE','%' .$blog. '%')->orWhere('status','LIKE','%' .$blog. '%')->orWhere('created_at','LIKE','%' .$blog. '%')->get();
        
        return view('admin.blogs.allblogs',compact('blogs'));
    }
}

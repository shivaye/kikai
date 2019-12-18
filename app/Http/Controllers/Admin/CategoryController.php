<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Category;

class CategoryController extends Controller
{
    public function getCategoryList(){
		$category = Category::orderBy('created_at','DESC')->get();
		return view('admin.category.allcategory',compact('category'));
	}

	public function addCategory(){
		return view('admin.category.add-category');
	}

	public function createCategory(Request $request){
		$category = new Category;

        $category->category_name = $request->title;                     
        $category->status = $request->status;
        $category->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editCategory($id){
		$category =Category::find($id);
		return view('admin.category.edit-category',compact('category'));
	}

	public function updateCategory(Request $request,$id){
		$category =Category::find($id);
		
		$category->category_name = $request->title;                     
        $category->status = $request->status;
        $category->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteCategory($id){
		$category =Category::find($id);
        $category->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedCategory(Request $request){
        $category = $request->keyword;

        $category = Category::where('category_name','LIKE','%' .$category. '%')->get();
        
        return view('admin.category.allcategory',compact('category'));
    }
}

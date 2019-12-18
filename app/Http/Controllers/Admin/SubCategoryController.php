<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
{
  public function getSubCategorylist(){
    $subcategory = SubCategory::orderBy('created_at','DESC')->get();
    return view('admin.subcategory.allsubcategory',compact('subcategory'));
  }

  public function addSubCategory(){
    $category = Category::orderBy('created_at','DESC')->get();
    return view('admin.subcategory.add-subcategory',compact('category'));
  }

  public function createSubCategory(Request $request){
    $subcategory = new SubCategory;

    $subcategory->category_name = $request->category_name1;             
    $subcategory->subcategory_name = $request->subcategory_name1;
    $subcategory->slug = strtolower(substr($request->subcategory_name,0,2));       
    $subcategory->status = $request->status;
    $subcategory->save();

    return redirect()->back()->with('message','Data Inserted Successfully');
  }

  public function editSubCategory($id){

    $subcategory =SubCategory::find($id);
    $category = Category::orderBy('created_at','DESC')->get();
    return view('admin.subcategory.edit-subcategory',compact('subcategory','category'));
  }

  public function updateSubCategory(Request $request,$id){
    $subcategory =SubCategory::find($id);


    $subcategory->category_name = $request->category_name1;             
    $subcategory->subcategory_name = $request->subcategory_name1;
    $subcategory->slug = strtolower(substr($request->subcategory_name,0,2));       
    $subcategory->status = $request->status;
    $subcategory->update();

    return redirect()->back()->with('message','Details Updated Successfully');
  }

  public function deleteSubCategory($id){
    $subcategory =SubCategory::find($id);
    $subcategory->delete();

    return redirect()->back()->with('message','Record Deleted Successfully');
  }

  public function getSearchedSubCategory(Request $request){
    $subcategory = $request->keyword;

    $subcategory = SubCategory::where('title','LIKE','%' .$subcategory. '%')->orWhere('description','LIKE','%' .$subcategory. '%')->orWhere('created_at','LIKE','%' .$subcategory. '%')->get();

    return view('admin.subcategory.allsubcategory',compact('subcategory'));
  }
}

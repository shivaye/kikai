<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\CauseCategory;
use App\Cause;
use Log;

class CauseController extends Controller
{
	//Category
	public function getCategoriesList(){
		$categories = CauseCategory::orderBy('created_at','DESC')->get();
		return view('admin.causes.allcategories',compact('categories'));
	}

	public function addCategory(){
		return view('admin.causes.add-category');
	}

	public function createCategory(Request $request){
		$category = new CauseCategory;

        $category->name = $request->name;
        $category->status = $request->status;
       
        $category->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editCategory($id){
		$category = CauseCategory::find($id);
		return view('admin.causes.edit-category',compact('category'));

	}

	public function updateCategory(Request $request,$id){

		$category = CauseCategory::find($id);
		$date = $category->date;

		$category->name = $request->name;
        $category->status = $request->status;        
        $category->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteCategory($id){
		$category = CauseCategory::find($id);
        $category->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

	//Cause
    public function getCausesList(){
		$causes = Cause::all();
		return view('admin.causes.allcauses',compact('causes'));
	}

	public function addCause(){
		$categories = CauseCategory::where('status','Active')->get();
		return view('admin.causes.add-cause',compact('categories'));
	}

	public function createCause(Request $request){
		$cause = new Cause;
        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/causes-img/', time().$file->getClientOriginalName());
           $cause->image_url=time().$file->getClientOriginalName();           
        }

        
        $cause->category_id = $request->category_id;
        $cause->title = $request->title;        
        $cause->description = $request->description;        
        $cause->targeted_amount = $request->targeted_amount;        
        $cause->urgent = $request->urgent;        
        $cause->last_date = $request->last_date;      
        $cause->video_url = $request->video_url;      
        $cause->short_description = $request->short_description;
        $cause->slug = strtolower(str_replace(' ','-',$request->title));  
        $cause->cause_status = $request->cause_status;        
        $cause->status = $request->status;
        $cause->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editCause($id){
		$cause = Cause::find($id);
		$categories = CauseCategory::all();
		return view('admin.causes.edit-cause',compact('cause','categories'));

	}

	public function updateCause(Request $request,$id){

		$cause = Cause::find($id);
		$date = $cause->date;

		Log::info($request);
		// for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/causes-img/', time().$file->getClientOriginalName());
           $cause->image_url=time().$file->getClientOriginalName();           
        }

       
        $cause->category_id = $request->category_id;
        $cause->title = $request->title;        
        $cause->description = $request->description;        
        $cause->targeted_amount = $request->targeted_amount;        
        $cause->urgent = $request->urgent;        
        $cause->last_date = $request->last_date;        
        $cause->video_url = $request->video_url;       
        $cause->short_description = $request->short_description;
        $cause->slug = strtolower(str_replace(' ','-',$request->title));
        $cause->cause_status = $request->cause_status;        
        $cause->status = $request->status;
        $cause->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteCause($id){
		$cause = Cause::find($id);
        $cause->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}


    public function getSearchedCategory(Request $request){
        $cat = $request->keyword;

        $categories = CauseCategory::where('status','LIKE','%' .$cat. '%')->orWhere('name','LIKE','%' .$cat. '%')->orWhere('created_at','LIKE','%' .$cat. '%')->get();
        
        return view('admin.causes.allcategories',compact('categories'));
    }


    public function getSearchedCause(Request $request){
        $cause = $request->keyword;

        $causes = Cause::where('title','LIKE','%' .$cause. '%')->orWhere('targeted_amount','LIKE','%' .$cause. '%')->orWhere('description','LIKE','%' .$cause. '%')->orWhere('status','LIKE','%' .$cause. '%')->orWhere('created_at','LIKE','%' .$cause. '%')->orWhere('short_description','LIKE','%' .$cause. '%')->orWhere('urgent','LIKE','%' .$cause. '%')->get();
        
        return view('admin.causes.allcauses',compact('causes'));
    }

}

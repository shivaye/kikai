<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Award;

class AwardsController extends Controller
{
    public function getAwardsList(){
		$awards = Award::orderBy('created_at','DESC')->get();
		return view('admin.awards.allawards',compact('awards'));
	}

	public function addAward(){
		return view('admin.awards.add-award');
	}

	public function createAward(Request $request){
		$award = new Award;

         // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/awards-img/', $file->getClientOriginalName());
           $award->image_url=$file->getClientOriginalName();           
        }
        $award->title = $request->title;
        $award->long_description = $request->long_description;
        $award->short_description = $request->short_description;
        $award->video_url = $request->video_url;
        $award->slug = strtolower(str_replace(' ', '-', $request->title));        
        $award->status = $request->status;
        $award->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editAward($id){
		$award = Award::find($id);
		return view('admin.awards.edit-award',compact('award'));

	}

	public function updateAward(Request $request,$id){

		$award = Award::find($id);
		
		 // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/awards-img/', $file->getClientOriginalName());
           $award->image_url=$file->getClientOriginalName();           
        }
        $award->title = $request->title;
        $award->long_description = $request->long_description;
        $award->short_description = $request->short_description;
        $award->video_url = $request->video_url;
        $award->slug = strtolower(str_replace(' ', '-', $request->title));        
        $award->status = $request->status;
        $award->update();

        return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteAward($id){
		$award = Award::find($id);
        $award->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedAward(Request $request){
        $award = $request->keyword;

        $awards = Award::where('title','LIKE','%' .$award. '%')->orWhere('short_description','LIKE','%' .$award. '%')->orWhere('long_description','LIKE','%' .$award. '%')->orWhere('status','LIKE','%' .$award. '%')->orWhere('created_at','LIKE','%' .$award. '%')->get();
        
        return view('admin.awards.allawards',compact('awards'));
    }
}

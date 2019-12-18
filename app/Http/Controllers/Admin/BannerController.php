<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Banner;

class BannerController extends Controller
{
    public function getBannerList(){
		$banner = Banner::orderBy('created_at','DESC')->get();
		return view('admin.banner.allbanner',compact('banner'));
	}

	public function addBanner(){
		return view('admin.banner.add-banner');
	}

	public function createBanner(Request $request){
		$banner = new Banner;

        // for image_url     
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/banner-img/', time().$file->getClientOriginalName());
           $banner->image_url=time().$file->getClientOriginalName();           
        }

        $banner->title = $request->title;             
        $banner->slug = strtolower(str_replace(' ', '-', $request->title));        
        $banner->status = $request->status;
        $banner->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editBanner($id){
		$banner =Banner::find($id);
		return view('admin.banner.edit-banner',compact('banner'));
	}

	public function updateBanner(Request $request,$id){
		$banner =Banner::find($id);

        // for image_url
		if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/banner-img/', time().$file->getClientOriginalName());
           $banner->image_url=time().$file->getClientOriginalName();           
        }
		
		$banner->title = $request->title;                
        $banner->slug = strtolower(str_replace(' ', '-', $request->title));        
        $banner->status = $request->status;
        $banner->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteBanner($id){
		$banner =Banner::find($id);
        $banner->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedBanner(Request $request){
        $banner = $request->keyword;

        $banner = Banner::where('title','LIKE','%' .$banner. '%')->orWhere('description','LIKE','%' .$banner. '%')->orWhere('created_at','LIKE','%' .$banner. '%')->get();
        
        return view('admin.banner.allbanner',compact('banner'));
    }
}

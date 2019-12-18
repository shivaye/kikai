<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Service;

class ServiceController extends Controller
{
    public function getServicesList(){
		$services = Service::orderBy('created_at','DESC')->get();
		return view('admin.services.allservices',compact('services'));
	}

	public function addService(){
		return view('admin.services.add-service');
	}

	public function createService(Request $request){
		$service = new Service;

        // for image_url     
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/services-img/', time().$file->getClientOriginalName());
           $service->image_url=time().$file->getClientOriginalName();           
        }

        $service->title = $request->title;        
        $service->description = $request->description;        
        $service->slug = strtolower(str_replace(' ', '-', $request->title));        
        $service->status = $request->status;
        $service->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editService($id){
		$service =Service::find($id);
		return view('admin.services.edit-service',compact('service'));
	}

	public function updateService(Request $request,$id){
		$service =Service::find($id);

        // for image_url
		if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/services-img/', time().$file->getClientOriginalName());
           $service->image_url=time().$file->getClientOriginalName();           
        }
		
		$service->title = $request->title;        
        $service->description = $request->description;        
        $service->slug = strtolower(str_replace(' ', '-', $request->title));        
        $service->status = $request->status;
        $service->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteService($id){
		$service =Service::find($id);
        $service->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedService(Request $request){
        $service = $request->keyword;

        $services = Service::where('title','LIKE','%' .$service. '%')->orWhere('description','LIKE','%' .$service. '%')->orWhere('created_at','LIKE','%' .$service. '%')->get();
        
        return view('admin.services.allservices',compact('services'));
    }
}

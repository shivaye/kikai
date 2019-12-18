<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function getTestimonialsList(){
		$testimonials = Testimonial::orderBy('created_at','DESC')->get();
		return view('admin.testimonials.alltestimonials',compact('testimonials'));
	}

	public function addTestimonial(){
		return view('admin.testimonials.add-testimonial');
	}

	public function createTestimonial(Request $request){
		$testimonial = new Testimonial;

        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/testimonials-img/', time().$file->getClientOriginalName());
           $testimonial->image_url=time().$file->getClientOriginalName();           
        }
        $testimonial->name = $request->name;
        $testimonial->occupasion = $request->occupasion;
        $testimonial->rating = 5;
        $testimonial->review = $request->review;        
        $testimonial->status = $request->status;
        $testimonial->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');
	}

	public function editTestimonial($id){
		$testimonial = Testimonial::find($id);
		return view('admin.testimonials.edit-testimonial',compact('testimonial'));

	}

	public function updateTestimonial(Request $request,$id){

		$testimonial = Testimonial::find($id);
		$date = $testimonial->date;

		// for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/testimonials-img/', time().$file->getClientOriginalName());
           $testimonial->image_url=time().$file->getClientOriginalName();           
        }
        $testimonial->name = $request->name;
        $testimonial->occupasion = $request->occupasion;
        $testimonial->rating = 5;
        $testimonial->review = $request->review;        
        $testimonial->status = $request->status;
        $testimonial->update();

        return redirect()->back()->with('message','Details Updated Successfully');
	}

	public function deleteTestimonial($id){
		$testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}
}

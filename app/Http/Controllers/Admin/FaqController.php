<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;

class FaqController extends Controller
{
    public function getFaqsList(){
		$faqs = Faq::orderBy('created_at','DESC')->get();
		return view('admin.faq.allfaqs',compact('faqs'));
	}

	public function addFaq(){
		return view('admin.faq.add-faq');
	}

	public function createFaq(Request $request){
		$faq = new Faq;
        
        $faq->questions = $request->questions;
        $faq->answers = $request->answers;        
        $faq->status = $request->status;
        $faq->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editFaq($id){
		$faq = Faq::find($id);
        
		return view('admin.faq.edit-faq',compact('faq'));
	}

	public function updateFaq(Request $request,$id){

		$faq = Faq::find($id);
		
		$faq->questions = $request->questions;
        $faq->answers = $request->answers;        
        $faq->status = $request->status;
        $faq->update();

        return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteFaq($id){
		$faq = Faq::find($id);
        $faq->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

	public function getSearchedFaq(Request $request){
        $faq = $request->keyword;

        $faqs = Faq::where('status','LIKE','%' .$faq. '%')->orWhere('questions','LIKE','%' .$faq. '%')->orWhere('created_at','LIKE','%' .$faq. '%')->get();
        
        return view('admin.faq.allfaqs',compact('faqs'));
    }
}

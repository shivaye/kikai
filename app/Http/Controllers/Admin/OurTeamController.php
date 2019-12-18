<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\OurTeam;

class OurTeamController extends Controller
{
    public function getMembersList(){
		$members = OurTeam::orderBy('created_at','DESC')->get();
		return view('admin.our_team.allmembers',compact('members'));
	}

	public function addMember(){
		return view('admin.our_team.add-member');

	}

	public function createMember(Request $request){
		$member = new OurTeam;

        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/team-img/', time().$file->getClientOriginalName());
           $member->image_url=time().$file->getClientOriginalName();           
        }
        $member->member_name = $request->member_name;
        $member->role = $request->role;        
        $member->facebook = $request->facebook;        
        $member->twitter = $request->twitter;        
        $member->google = $request->google;        
        $member->status = $request->status;
        $member->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editMember($id){
		$member = OurTeam::find($id);
		return view('admin.our_team.edit-member',compact('member'));

	}

	public function updateMember(Request $request,$id){

		$member = OurTeam::find($id);
		
		//For Image
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/team-img/', $file->getClientOriginalName());
           $member->image_url=$file->getClientOriginalName();           
        }
        $member->member_name = $request->member_name;
        $member->role = $request->role;        
        $member->facebook = $request->facebook;        
        $member->twitter = $request->twitter;        
        $member->google = $request->google;    
        $member->status = $request->status;
        $member->update();

        return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteMember($id){
		$member = OurTeam::find($id);
        $member->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\State;
use App\City;
use App\Event;

class EventsController extends Controller
{
    public function getEventsList(){
		$events = Event::orderBy('created_at','DESC')->get();
		return view('admin.events.allevents',compact('events'));
	}

	public function addEvent(){
		$states = State::all();
		
		return view('admin.events.add-event',compact('states', 'cities'));

	}

	public function createEvent(Request $request){
		$event = new Event;
            $date = $request->date;
            $store = date('d M',strtotime($date));
        
        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/events-img/', time().$file->getClientOriginalName());
           $event->image_url=time().$file->getClientOriginalName();           
        }
        $event->title = $request->title;
        $event->timing = $request->timing;
        $event->description = $request->description;
        $event->short_description = $request->short_description;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->country = 1;
        $event->slug = strtolower(str_replace(' ', '-', $request->title));
        $event->date = $store;
        $event->status = $request->status;
        $event->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editEvent($id){
		$event = Event::find($id);
        $states = State::all();
		return view('admin.events.edit-event',compact('event','states'));
	}

	public function updateEvent(Request $request,$id){

		$event = Event::find($id);
        $date = $request->date;
        $store = date('d M',strtotime($date));

		
		// for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/events-img/', time().$file->getClientOriginalName());
           $event->image_url=time().$file->getClientOriginalName();           
        }
        $event->title = $request->title;
        $event->timing = $request->timing;
        $event->description = $request->description;
        $event->short_description = $request->short_description;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->country = 1;
        $event->slug = strtolower(str_replace(' ', '-', $request->title));
        $event->date = $store;
        $event->status = $request->status;
        $event->update();      

        return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteEvent($id){
		$event = Event::find($id);
        $event->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
	}

    public function getSearchedEvent(Request $request){
        $event = $request->keyword;

        $city = City::where('city',$event)->first();
        $state = State::where('state',$event)->first();

        if(!empty($city)){
            $events = Event::where('title','LIKE','%' .$event. '%')->orWhere('timing','LIKE','%' .$event. '%')->orWhere('description','LIKE','%' .$event. '%')->orWhere('status','LIKE','%' .$event. '%')->orWhere('created_at','LIKE','%' .$event. '%')->orWhere('short_description','LIKE','%' .$event. '%')->orWhere('city',$city->id)->orWhere('status',$event)->get();
        }

        elseif(!empty($state)){
            $events = Event::where('title','LIKE','%' .$event. '%')->orWhere('timing','LIKE','%' .$event. '%')->orWhere('description','LIKE','%' .$event. '%')->orWhere('status','LIKE','%' .$event. '%')->orWhere('created_at','LIKE','%' .$event. '%')->orWhere('short_description','LIKE','%' .$event. '%')->orWhere('state',$state->id)->orWhere('status',$event)->get();
        }

        else{
                $events = Event::where('title','LIKE','%' .$event. '%')->orWhere('timing','LIKE','%' .$event. '%')->orWhere('description','LIKE','%' .$event. '%')->orWhere('status','LIKE','%' .$event. '%')->orWhere('created_at','LIKE','%' .$event. '%')->orWhere('short_description','LIKE','%' .$event. '%')->orWhere('status',$event)->get();
        }        
        
        return view('admin.events.allevents',compact('events'));
    }
}

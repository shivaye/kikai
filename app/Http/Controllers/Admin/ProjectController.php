<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Project;

class ProjectController extends Controller
{
	public function getProjectsList(){
		$projects = Project::orderBy('created_at','DESC')->get();
		return view('admin.project.allprojects',compact('projects'));
	}

	public function addProject(){
		return view('admin.project.add-project');
	}

	public function createProject(Request $request){
		$project = new Project;

         // for image_url
		if (Input::hasfile('image_url')) {
			$file=Input::file('image_url');
			$file->move(public_path(). '/projects-img/', $file->getClientOriginalName());
			$project->image_url=$file->getClientOriginalName();           
		}
		$project->title = $request->title;
		$project->project_name = $request->project_name;
		$project->author = $request->author;
		$project->link = $request->link;
		$project->long_description = $request->long_description;
		$project->short_description = $request->short_description;
		$project->slug = strtolower(str_replace(' ', '-', $request->title));        
		$project->status = $request->status;
		$project->save();

		return redirect()->back()->with('message','Data Inserted Successfully');

	}

	public function editProject($id){
		$project = Project::find($id);
		return view('admin.project.edit-project',compact('project'));

	}

	public function updateProject(Request $request,$id){

		$project = Project::find($id);
		
		 // for image_url
		if (Input::hasfile('image_url')) {
			$file=Input::file('image_url');
			$file->move(public_path(). '/projects-img/', $file->getClientOriginalName());
			$project->image_url=$file->getClientOriginalName();           
		}
		$project->title = $request->title;
		$project->project_name = $request->project_name;
		$project->author = $request->author;
		$project->long_description = $request->long_description;
		$project->short_description = $request->short_description;
		$project->link = $request->link;
		$project->slug = strtolower(str_replace(' ', '-', $request->title));        
		$project->status = $request->status;
		$project->update();

		return redirect()->back()->with('message','Details Updated Successfully');

	}

	public function deleteProject($id){
		$project = Project::find($id);
		$project->delete();

		return redirect()->back()->with('message','Record Deleted Successfully');
	}

	public function getSearchedProject(Request $request){
		$project = $request->keyword;

		$projects = Project::where('title','LIKE','%' .$project. '%')->orWhere('short_description','LIKE','%' .$project. '%')->orWhere('long_description','LIKE','%' .$project. '%')->orWhere('status','LIKE','%' .$project. '%')->orWhere('created_at','LIKE','%' .$project. '%')->get();

		return view('admin.project.allprojects',compact('projects'));
	}







}

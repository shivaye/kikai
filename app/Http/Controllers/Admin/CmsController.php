<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cms;

class CmsController extends Controller
{
    public function getAll(){
    	$pages = Cms::all();
    	return view('admin.cms.allcontent',compact('pages'));
    }

    public function editContent($id){
        $page = Cms::where('id',$id)->first();
        return view('admin.cms.edit-content',compact('page'));
    }

    public function updateContent(Request $request, $id){
    	$cms = Cms::where('id',$id)->first();

    	$cms->content = $request->content;
    	$cms->page_name = $request->page_name;
    	$cms->update();

        return redirect()->back()->with('message','Content updated successfully');
    }
}

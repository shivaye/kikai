<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Image;
use App\Video;

class ImagesController extends Controller
{
  public function getImagesList(){
    $images = Image::orderBy('created_at','DESC')->get();
    return view('admin.images.allimages',compact('images'));
  }

  public function addImage(){
    return view('admin.images.add-image');

  }

  public function createImage(Request $request){
    $image = new Image;

        // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/banner-images/', time().$file->getClientOriginalName());
           $image->image_url=time().$file->getClientOriginalName();           
        }
       
        $image->image_category = $request->image_category;
        $image->image_text = $request->image_category;
        $image->status = $request->status;
        $image->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

  }

  public function editImage($id){
    $image = Image::find($id);
    return view('admin.images.edit-image',compact('image'));

  }

  public function updateImage(Request $request,$id){

    $image = Image::find($id);
    
     // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/banner-images/', $file->getClientOriginalName());
           $image->image_url=$file->getClientOriginalName();           
        }

        $image->image_category = $request->image_category;
        $image->image_text = $request->image_category;
        $image->status = $request->status;
        $image->update();

        return redirect()->back()->with('message','Details Updated Successfully');

  }

  public function deleteImage($id){
    $image = Image::find($id);
        $image->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
  }

  public function getSearchedImage(Request $request){
    $key = $request->keyword;
        $images = Image::where('status','LIKE','%' .$key. '%')->orWhere('image_category',$key)->get();
        return view('admin.images.allimages',compact('images'));
  }

  public function getVideosList(){
    $videos = Video::orderBy('created_at','DESC')->get();
    return view('admin.videos.allvideos',compact('videos'));
  }

  public function addVideo(){
    return view('admin.videos.add-video');

  }

  public function createVideo(Request $request){
    $video = new Video;        
       
        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->date = $request->date;
        $video->status = $request->status;
        $video->save();
       
        return redirect()->back()->with('message','Data Inserted Successfully');

  }

  public function editVideo($id){
    $video = Video::find($id);
    return view('admin.videos.edit-video',compact('video'));

  }

  public function updateVideo(Request $request,$id){

    $video = Video::find($id);
    
     // for image_url
        if (Input::hasfile('image_url')) {
           $file=Input::file('image_url');
           $file->move(public_path(). '/banner-images/', $file->getClientOriginalName());
           $image->image_url=$file->getClientOriginalName();           
        }

        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->date = $request->date;
        $video->status = $request->status;
        $image->update();

        return redirect()->back()->with('message','Details Updated Successfully');

  }

  public function deleteVideo($id){
    $video = Video::find($id);
        $video->delete();

        return redirect()->back()->with('message','Record Deleted Successfully');
  }

}

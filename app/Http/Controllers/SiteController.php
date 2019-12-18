<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurTeam;
use App\Project;
use App\Image;
use App\Testimonial;
use App\Faq;
use App\Service;

class SiteController extends Controller
{
    public function getIndex(){
        $members = OurTeam::where('status','Active')->get();
        $services = Service::where('status','Active')->get();
        $projects = Project::where('status','Active')->get();
        $testimonials = Testimonial::where('status','Active')->get();
        $banners = Image::where('image_category','banner')->where('status','Active')->get();
    	return view('front.index',compact('members','projects','banners','testimonials','services'));
    }

    public function getAboutUs(){
        $faqs = Faq::where('status','Active')->get();
    	return view('front.about-us',compact('faqs'));
    }

    public function getContactUs(){
    	return view('front.contact-us');
    }

    public function getOurTeam(){
        $members = OurTeam::where('status','Active')->get();        
    	return view('front.our-team',compact('members'));
    }

    public function getServices(){
        $services = Service::where('status','Active')->get();
        return view('front.services',compact('services'));
    }
}

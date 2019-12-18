<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newsletter;
use App\ContactForm;
use App\Volunteer;
use App\Donation;

class OtherPagesController extends Controller
{
   	public function getNewslettersList(){
   		$news = Newsletter::all();
   		return view('admin.other-pages.newsletter',compact('news'));
   	}

      public function getSearchedNewsletter(Request $request){
         $key = $request->keyword;
         $news = Newsletter::where('email','LIKE','%'.$key.'%')->orWhere('status','LIKE','%'.$key.'%')->orWhere('created_at','LIKE','%'.$key.'%')->get();
         return view('admin.other-pages.newsletter',compact('news'));
      }

      public function deleteNewsletter($id){
         $news = Newsletter::find($id);
         $news->delete();
         return redirect()->back()->with('message','Data Deleted Successfully');
      }

   	public function getContactsList(){
   		$contacts = ContactForm::all();
   		return view('admin.other-pages.contact-us',compact('contacts'));
   	}

      public function getSearchedContact(Request $request){
         $key = $request->keyword;
         $contacts = ContactForm::where('name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')->orWhere('subject','LIKE','%'.$key.'%')->orWhere('phone','LIKE','%'.$key.'%')->orWhere('created_at','LIKE','%'.$key.'%')->get();
         return view('admin.other-pages.contact-us',compact('contacts'));
      }

      public function deleteContact($id){
         $contact = Contact::find($id);
         $contact->delete();
         return redirect()->back()->with('message','Data Deleted Successfully');
      }

   	public function getVolunteersList(){
   		$volunteers = Volunteer::all();
   		return view('admin.other-pages.volunteers',compact('volunteers'));
   	}

      public function getSearchedVolunteer(Request $request){
         $key = $request->keyword;
         $volunteers = Volunteer::where('created_at','LIKE','%'.$key.'%')->orWhere('name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')->orWhere('phone','LIKE','%'.$key.'%')->get();
         return view('admin.other-pages.volunteers',compact('volunteers'));
      }

      public function deleteVolunteer($id){
         $volunteer = Volunteer::find($id);
         $volunteer->delete();
         return redirect()->back()->with('message','Data Deleted Successfully');
      }

      public function getDonationList(){
         $donations = Donation::all();
         return view('admin.donation.alldonations',compact('donation'));
      }

      public function getSearchedDonation(Request $request){
         $key = $request->keyword;
         $donations = Donation::where('donated_amount','LIKE','%'.$key.'%')->orWhere('vendor_name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')->orWhere('phone','LIKE','%'.$key.'%')->orWhere('payment_mode','LIKE','%'.$key.'%')->orWhere('transaction_id','LIKE','%'.$key.'%')->get;
         return view('admin.donation.alldonations',compact('donation'));
      }

      public function deleteDonation($id){
         $donation = Donation::find($id);
         $donation->delete();
         return redirect()->back()->with('message','Data Deleted Successfully');
      }


      public function getPageContent(){
         $contents = PagesContent::all();
         return view('admin.other-pages.pagescontents','contents');
      }


      public function showsendsms(Request $request)
    {
        return view('admin.sms.sendsms');
    }

    public function sendsms(Request $request)
    {

        $no = $request->mobile;
        $sms = $request->sms;
        $sms = str_replace(' ', '%20', $sms);
        $url = "http://103.16.101.52:8080/sendsms/bulksms?username=bcks-imzhnd&password=Super123&type=0&dlr=1&destination=$no&source=BSSPLI&message='$sms'";
         $c = curl_init();
         curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
         curl_setopt($c,CURLOPT_HTTPGET ,1);
         
         curl_setopt($c, CURLOPT_URL, $url);
         $contents = curl_exec($c);
           if (curl_errno($c)) {
             echo 'Curl error: ' . curl_error($c);
           }else{
             curl_close($c);
           }

           return redirect()->back()->with('message','SMS send successfully');
    }



}

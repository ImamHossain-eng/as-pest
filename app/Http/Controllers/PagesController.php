<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Faq;
use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Visitor;

use Carbon\Carbon;

class PagesController extends Controller
{
    // public function visitor_count(){
    //     // $ip = request()->ip();
    //     // $visitor_db = Visitor::latest()->where('ip', $ip)->first();
    //     // if($visitor_db){
    //     //     $diff = Carbon::parse($visitor_db->created_at)->diffInHours();
    //     //     if($diff > 23){
    //     //         $visitor = new Visitor;
    //     //         $visitor->ip = $ip;
    //     //         $visitor->save();
    //     //     }
    //     //     //'created_at', '>=', \Carbon::today()->toDateString() 
    //     //     //$diff = Carbon::parse($notice->created_at)->diffInHours()      
    //     // }else{
    //     //     $visitor = new Visitor;
    //     //     $visitor->ip = $ip;
    //     //     $visitor->save();
    //     // }

    //     return view('admin.visitor.visitor');
    // }
    public function index() {
        //Get unique visitor IP
        // get the client ip
        $ip = request()->ip();
 
         //fetch information from ip-api
        $result = Http::get('http://ip-api.com/json/'.$ip);
 
         //convert the result from string to JSON
        $visit = json_decode($result, true);
 
         //Check the status
        if($visit['status'] != "fail"){
 
             //Check for unique visitor
             $visitor_DB = Visitor::latest()->where('ip', $ip)->first();
 
             //check for exists or if visitor visited minimum 1 day ago
             if(!$visitor_DB || $visitor_DB->created_at->diffInHours() > 23){                
 
                 //Initiate the visitor and save to db
                 $visitor = new Visitor;
                 $visitor->ip = $ip;
                 $visitor->country = $visit['country'];
                 $visitor->region_name = $visit['regionName'];
                 $visitor->city = $visit['city'];
                 $visitor->zip = $visit['zip'];
                 $visitor->lat = $visit['lat'];
                 $visitor->lon = $visit['lon'];
                 $visitor->timezone = $visit['timezone'];
                 $visitor->isp = $visit['isp'];
                 $visitor->save();            
            }  
        }
        

        //Fetch Data from db
        $faq_lefts = Faq::orderBy('created_at', 'desc')->where('side', 1)->take(5)->get();
        $faq_rights = Faq::orderBy('created_at', 'asc')->where('side', 2)->take(5)->get();
        $members = Member::orderBy('created_at', 'asc')->take(4)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->where('show', 1)->take(5)->get();
        $testimonial_images = Testimonial::orderBy('id', 'desc')->where('show', 1)->take(5)->get();
        $services = Service::orderBy('created_at', 'asc')->take(6)->get();
        $sliders = Slider::orderBy('created_at', 'asc')->take(6)->get();
        return view('HomePage', compact('faq_lefts', 'faq_rights', 'members', 'testimonials', 'testimonial_images', 'services', 'sliders'));
    }
    public function contact(){
        return view('contact');
    }
    public function contact_store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:10|max:11',
            'msg' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('contact')->with('success', 'Successfully sent the Message');
    }
    //service CRUD
    public function service_show($id){
        $service = Service::find($id);
        $members = Member::all();
        $services = Service::orderBy('created_at', 'asc')->get();
        return view('pages.service_show', compact('service', 'members', 'services'));
    }
    public function service_search(Request $request){
        $this->validate($request, [
            'search' => 'required'
        ]);
        $search = $request->input('search');
        $service = Service::where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('motto', 'LIKE', '%' . $search . '%')
        ->orWhere('body', 'LIKE', '%' . $search . '%')
        ->first();
        if($service != ''){
            $members = Member::all();
            $services = Service::orderBy('created_at', 'asc')->get();
            return view('pages.service_show', compact('service', 'members', 'services'));
        }else{
            //return redirect()->back()->with('error', 'No Searching result found');\
            return redirect()->route('homepage')->with('error', 'No Searching Result Found');
        }
        
    }
    public function team_index(){
        $members = Member::all();
        return view('pages.team', compact('members'));
    }
}

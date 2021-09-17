<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;
use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Contact;

class PagesController extends Controller
{
    public function index() {
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
        $service = Service::where('name', 'LIKE', '%' . $search . '%')->orWhere('motto', 'LIKE', '%' . $search . '%')->first();
        $members = Member::all();
        $services = Service::orderBy('created_at', 'asc')->get();
        return view('pages.service_show', compact('service', 'members', 'services'));
    }
    public function team_index(){
        $members = Member::all();
        return view('pages.team', compact('members'));
    }
}

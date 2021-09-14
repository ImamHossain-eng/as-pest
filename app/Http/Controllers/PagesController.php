<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;
use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Service;

class PagesController extends Controller
{
    public function index() {
        $faq_lefts = Faq::orderBy('created_at', 'desc')->where('side', 1)->take(5)->get();
        $faq_rights = Faq::orderBy('created_at', 'asc')->where('side', 2)->take(5)->get();
        $members = Member::orderBy('created_at', 'asc')->take(4)->get();
        $testimonials = Testimonial::latest()->take(5)->get();
        $testimonial_images = Testimonial::latest()->take(5)->get();
        $services = Service::orderBy('created_at', 'asc')->take(6)->get();
        return view('HomePage', compact('faq_lefts', 'faq_rights', 'members', 'testimonials', 'testimonial_images', 'services'));
    }
    public function contact(){
        return view('contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;

use Auth;

class UserController extends Controller
{
    public function user_testimonial(){
        $testimonials = Auth::user()->testimonials;
        return view('user.testimonial.index', compact('testimonials'));
    }
    public function testimonial_create(){
        return view('user.testimonial.create');
    }
}

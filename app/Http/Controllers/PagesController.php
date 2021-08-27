<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class PagesController extends Controller
{
    public function index() {
        $faq_lefts = Faq::orderBy('created_at', 'desc')->take(5)->get();
        $faq_rights = Faq::orderBy('created_at', 'asc')->take(5)->get();
        return view('HomePage', compact('faq_lefts', 'faq_rights'));
    }
}

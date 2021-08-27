<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class PagesController extends Controller
{
    public function index() {
        $faq_lefts = Faq::orderBy('id', 'desc')->take(2)->get();
        $faq_rights = Faq::orderBy('id', 'asc')->take(2)->get();
        return view('HomePage', compact('faq_lefts', 'faq_rights'));
    }
}

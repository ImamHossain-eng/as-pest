<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Faq;

class BackController extends Controller
{

    public function faq_create(){
        return view('admin.faq.create');
    }
    public function faq_index(){
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }
    public function faq_store(Request $request){
        $this->validate($request, [
            'question' => 'required',
            'ans' => 'required'
        ]);
        Faq::create($request->all());
        return redirect()->route('admin.faq_index')->with('success', 'Successfully Inserted');
    }
    public function faq_destroy($id){
        Faq::find($id)->delete();
        return redirect()->route('admin.faq_index')->with('error', 'Successfully Removed');
    }
    public function faq_show($id){
        $faq = Faq::find($id);
        return view('admin.faq.show', compact('faq'));
    }
    public function faq_edit($id){
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }
    public function faq_update(Request $request, $id){
        $this->validate($request, [
            'question' => 'required',
            'ans' => 'required'
        ]);
        $faq = Faq::find($id);
        $faq->question = $request->input('question');
        $faq->ans = $request->input('ans');
        $faq->save();
        return redirect()->route('admin.faq_index')->with('warning', 'Successfully Updated');
    }
}

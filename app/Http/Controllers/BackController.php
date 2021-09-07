<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;

use App\Models\Faq;
use App\Models\Member;

class BackController extends Controller
{
    public function admin_home() {
        return view('admin.dashboard');
    }

    public function faq_create(){
        return view('admin.faq.create');
    }
    public function faq_index(){
        $faqs = Faq::latest()->paginate(10);
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
    public function member_index(){
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('admin.member.index', compact('members'));
    }
    public function member_create(){
        return view('admin.member.create');
    }
    public function member_store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(220, 300)->save(public_path('/images/staffs/'.$fileName));
        }
        else{
            $fileName = 'no_image.png';
        }

        $member = new Member;
        $member->name = $request->input('name');
        $member->designation = $request->input('designation');
        $member->fb = $request->input('fb');
        $member->twitter = $request->input('twitter');
        $member->linkedin = $request->input('linkedin');
        $member->instagram = $request->input('instagram');
        $member->image = $fileName;
        $member->save();
        return redirect()->route('admin.member_index');
    }
    public function member_destroy($id){
        $member = Member::find($id);
        $oldImg = $member->image;
        if($oldImg != 'no_image.png'){
            File::delete(public_path('/images/staffs/'.$oldImg));
        }
        $member->delete();
        return redirect()->route('admin.member_index');
    }
    public function member_edit($id){
        $member = Member::find($id);
        return view('admin.member.edit', compact('member'));
    }
    public function member_update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required'
        ]);

        $member = Member::find($id);
        $oldImg = $member->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(220, 300)->save(public_path('/images/staffs/'.$fileName));
            if($oldImg != 'no_image.png'){
                File::delete(public_path('/images/staffs/'.$oldImg));
            }
        }
        else{
            $fileName = $oldImg;
        }
        
        $member->name = $request->input('name');
        $member->designation = $request->input('designation');
        $member->fb = $request->input('fb');
        $member->twitter = $request->input('twitter');
        $member->linkedin = $request->input('linkedin');
        $member->instagram = $request->input('instagram');
        $member->image = $fileName;
        $member->save();
        return redirect()->route('admin.member_index');
    }
}

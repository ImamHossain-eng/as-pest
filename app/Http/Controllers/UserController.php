<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;
use App\Models\User;
use App\Models\User_info;

use Auth;
use Image;
use File;

class UserController extends Controller
{
    //User Information CRUD
    public function info_show(){
        return view('user.info.show');
    }
    public function info_create(){
        if(User_info::where('user_id', Auth::user()->id)->exists()){
            $info = Auth::user()->info;
            return view('user.info.edit', compact('info'));
        }else{
            return view('user.info.create');            
        }
    }
    public function info_store(Request $request){
        $this->validate($request, [
            'profession'=>'required',
            'number'=>'required',
            'address'=>'required',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(300, 300)->save(public_path('/images/user/'.$fileName));
        }
        else{
            $fileName = 'no_image.png';
        }
        $info = new User_info;
        $info->profession = $request->input('profession');
        $info->number = $request->input('number');
        $info->address = $request->input('address');
        $info->user_id = Auth::user()->id;
        $info->image = $fileName;
        $info->save();
        return redirect()->route('user.info_show')->with('success', 'Successfully Uploaded Your Profile');
    }
    public function info_update(Request $request){
        $this->validate($request, [
            'profession'=>'required',
            'number'=>'required',
            'address'=>'required',
        ]);
        $info = User_info::where('user_id', Auth::user()->id)->first();
        $oldImg = $info->image;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(300, 300)->save(public_path('/images/user/'.$fileName));
            if($oldImg != 'no_image.png'){
                File::delete(public_path('/images/user/'.$oldImg));
            }
        }
        else{
            $fileName = $oldImg;
        }
        
        $info->profession = $request->input('profession');
        $info->number = $request->input('number');
        $info->address = $request->input('address');
        $info->image = $fileName;
        $info->save();
        return redirect()->route('user.info_show')->with('success', 'Successfully Updated Your Profile');
    }
    public function user_testimonial(){
        $testimonials = Auth::user()->testimonials;
        return view('user.testimonial.index', compact('testimonials'));
    }
    public function testimonial_create(){
        return view('user.testimonial.create');
    }
    public function testimonial_store(Request $request){
        $this->validate($request, [
            'body'=>'required'
        ]);
        $test = new Testimonial;
        $test->name = Auth::user()->name;
        $test->profession = Auth::user()->info->profession;
        $test->body = $request->input('body');
        $test->save();
        return redirect()->route('admin.test_index')->with('success', 'Successfully Created');
    }
}

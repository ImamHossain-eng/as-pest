<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use Carbon\Carbon;

use App\Models\Faq;
use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Role;
use App\Models\Visitor;
use App\Models\User;

class BackController extends Controller
{
    
    public function admin_home() {
        return view('admin.dashboard');
    }

    public function role_index(){
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }
    public function role_create(){
        return view('admin.role.create');
    }
    public function role_store(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);
        $role = new Role;
        $role->name = $request->input('name');
        $role->status = true;
        $role->save();
        return redirect()->route('admin.role_index')->with('success', 'Successfully Created');
    }
    public function role_edit($id){
        $role = Role::find($id);
        return view('admin.role.edit', compact('role'));
    }
    public function role_update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required'
        ]);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->status = true;
        $role->save();
        return redirect()->route('admin.role_index')->with('warning', 'Successfully Updated');
    }
    //User CRUD
    public function user_index(){
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
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
            'ans' => 'required',
            'side' => 'required'
        ]);
        $side = $request->input('side');
        if($side != 'null'){
            Faq::create($request->all());
            return redirect()->route('admin.faq_index')->with('success', 'Successfully Inserted');
        }else{
            return redirect()->route('admin.faq_create')->with('error', 'Please Select left or right side');
        }  
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
        //validate side option
        $faq = Faq::find($id);
        $newSide = $request->input('side');
        $oldSide = $faq->side;

        if($newSide != 'null'){
            $side = $newSide;
        }else{
            $side = $oldSide;
        }        
        $faq->question = $request->input('question');
        $faq->ans = $request->input('ans');
        $faq->side = $side;
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
            Image::make($file)->resize(350, 250)->save(public_path('/images/staffs/'.$fileName));
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
            Image::make($file)->resize(350, 250)->save(public_path('/images/staffs/'.$fileName));
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
    public function member_show($id){
        $member = Member::find($id);
        return view('admin.member.show', compact('member'));
    }

    //testimonial crud start from here
    public function test_index(){
        $tests = Testimonial::all();
        return view('admin.test.index', compact('tests'));
    }
    public function test_create(){
        return view('admin.test.create');
    }
    public function test_store(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'profession'=>'required',
            'body'=>'required'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(300, 300)->save(public_path('/images/testimonial/'.$fileName));
        }
        else{
            $fileName = 'no_image.png';
        }

        $newShow = $request->input('show');
        if($newShow != 'null'){
            $show = $newShow;
        }else{
            $show = false;
        }
        $test = new Testimonial;
        $test->name = $request->input('name');
        $test->profession = $request->input('profession');
        $test->body = $request->input('body');
        $test->image = $fileName;
        $test->show = $show;
        $test->save();
        return redirect()->route('admin.test_index')->with('success', 'Successfully Created');
    }
    public function test_show($id){
        $test = Testimonial::find($id);
        return view('admin.test.show', compact('test'));
    }
    public function test_edit($id){
        $test = Testimonial::find($id);
        return view('admin.test.edit', compact('test'));
    }
    public function test_update(Request $request, $id){
        $this->validate($request, [
            'name'=>'required',
            'profession'=>'required',
            'body'=>'required'
        ]);

        $test = Testimonial::find($id);
        $oldShow = $test->show;
        $oldImg = $test->image;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(300, 300)->save(public_path('/images/testimonial/'.$fileName));
            if($oldImg != 'no_image.png'){
                File::delete(public_path('/images/testimonial/'.$oldImg));
            }
        }
        else{
            $fileName = $oldImg;
        }

        //show validation
        $newShow = $request->input('show');
        if($newShow != 'null'){
            $show = $newShow;
        }else{
            $show = $oldShow;
        }
      
        $test->name = $request->input('name');
        $test->profession = $request->input('profession');
        $test->body = $request->input('body');
        $test->image = $fileName;
        $test->show = $show;
        $test->save();
        return redirect()->route('admin.test_index')->with('warning', 'Successfully Updated');
    }
    public function test_destroy($id){
        $test = Testimonial::find($id);
        $oldImg = $test->image;
        if($oldImg != 'no_image.png'){
            File::delete(public_path('/images/testimonial/'.$oldImg));
        }
        $test->delete();
        return redirect()->route('admin.test_index')->with('error', 'Successfully Removed');
    }
    //Service CRUD start from here
    public function service_index(){
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }
    public function service_create(){
        return view('admin.service.create');
    }
    public function service_store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'motto' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(1400, 800)->save(public_path('/images/service/'.$fileName));
        }
        else{
            $fileName = 'no_image.png';
        }

        $service = new Service;
        $service->name = $request->input('name');
        $service->motto = $request->input('motto');
        $service->body = $request->input('body');
        $service->image = $fileName;
        $service->save();
        return redirect()->route('admin.service_index')->with('success', 'Successfully Inserted');
    }
    public function service_destroy($id){
        $service = Service::find($id);
        $oldImg = $service->image;
        if($oldImg != 'no_image.png'){
            File::delete(public_path('/images/service/'.$oldImg));
        }
        $service->delete();
        return redirect()->route('admin.service_index')->with('error', 'Successfully Removed');
    }
    public function service_show($id){
        $service = Service::find($id);
        return view('admin.service.show', compact('service'));
    }
    public function service_edit($id){
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }
    public function service_update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'motto' => 'required',
            'body' => 'required'
        ]);

        $service = Service::find($id);
        $oldImg = $service->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(1400, 800)->save(public_path('/images/service/'.$fileName));
            if($oldImg != 'no_image.png'){
                File::delete(public_path('/images/service/'.$oldImg));
            }
        }
        else{
            $fileName = $oldImg;
        }

        
        $service->name = $request->input('name');
        $service->motto = $request->input('motto');
        $service->body = $request->input('body');
        $service->image = $fileName;
        $service->save();
        return redirect()->route('admin.service_index')->with('warning', 'Successfully Updated');
    }
    //slider crud start from here
    public function slider_index(){
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function slider_create(){
        return view('admin.slider.create');
    }
    public function slider_store(Request $request){
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(1400, 700)->save(public_path('/images/slider/'.$fileName));

        }
        else{
            $fileName =  'no_image.png';
        }
        $slider = new Slider;
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
        $slider->image = $fileName;
        $slider->save();
        return redirect()->route('admin.slider_index')->with('success', 'Successfully Inserted');
        
    }
    public function slider_edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }
    public function slider_update(Request $request, $id){
        $slider = Slider::find($id);
        $oldImg = $slider->image;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            Image::make($file)->resize(1400, 700)->save(public_path('/images/slider/'.$fileName));
            if($oldImg != 'no_image.png'){
                File::delete(public_path('/images/slider/'.$oldImg));
            }

        }
        else{
            $fileName =  $oldImg;
        }
        
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
        $slider->image = $fileName;
        $slider->save();
        return redirect()->route('admin.slider_index')->with('warning', 'Successfully Updated');
    }
    public function slider_destroy($id){
        $slider = Slider::find($id);
        $oldImg = $slider->image;
        if($oldImg != 'no_image.png'){
            File::delete(public_path('/images/slider/'.$oldImg));
        }
        $slider->delete();
        return redirect()->route('admin.slider_index')->with('error', 'Successfully Removed');
    }
    public function message_index(){
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.message.index', compact('contacts'));
    }
    public function message_show($id){
        $message = Contact::find($id);
        if($message->notify == false){
            $message->notify = true;
            $message->save();
        }
        return view('admin.message.show', compact('message'));
    }
    public function message_destroy($id){
        Contact::find($id)->delete();
        return redirect()->route('admin.message_index')->with('error', 'Successfully Removed');
    }
    public function visitor_count(){
        $visitors = Visitor::latest()->paginate(10);
        return view('admin.visitor.index', compact('visitors'));
    }
    public function visitor_destroy($id){
        Visitor::find($id)->delete();
        return redirect()->route('admin.visitor_count')->with('error', 'Removed one record.');
    }
    public function visitor_today(){
        $visitors = Visitor::latest()
            ->where('created_at', '>=', Carbon::today()
            ->toDateString())->paginate(10);
        return view('admin.visitor.index', compact('visitors'));
    }
    public function visitor_trash(){
        $visitors = Visitor::onlyTrashed()->latest()->paginate(10);
        return view('admin.visitor.index', compact('visitors'));
    }
    public function visitor_restore($id){
        Visitor::withTrashed()->find($id)->restore();
        return redirect()->route('admin.visitor_count')->with('success', 'One visitor restored successfully.');
    }
    public function visitor_show($id){
        $visitor = Visitor::find($id);
        return view('admin.visitor.show', compact('visitor'));
    }

}

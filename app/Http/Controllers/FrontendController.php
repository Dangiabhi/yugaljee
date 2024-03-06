<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\service;
use App\Models\Plan;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $service = Service::where('is_active','1')->get();
        return view('frontend.home',compact('service'));
    }
    public function service(){
        $plans = Plan::where('is_active','on')->get();
        $serviceall = service::where('is_active','1')->get();
        return view('frontend.service', compact('serviceall','plans'));
    }
    public function single_service($slug){
        $serviceall = Service::where('is_active','1')->get();
        $service = Service::where('slug',$slug)->first();
        $plans = Plan::where('is_active', 'on') ->where('category', $service->id)->get();

        // dd($plans);
        return view('frontend.service-detail',['service' => $service, 'serviceall' => $serviceall, 'plans'=>$plans]);
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contact_store(Request $data){
        $data->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $contact = new contact;
        $contact->name = $data->name;
        $contact->subject = $data->subject;
        $contact->email = $data->email;
        $contact->phone = $data->phone;
        $contact->message = $data->message;
        $contact->save();

        return redirect()->back()->with('status', 'Contact Form Submitted SuccessFully');
    }

    public function privacy(){
        return view('frontend.privacy');
    }
    public function term(){
        return view('frontend.term');
    }
    public function about(){
        return view('frontend.about');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function blog_details(){
        return view('frontend.blog-detail');
    }
}

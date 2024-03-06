<?php

namespace App\Http\Controllers\admin;
use App\Models\service;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class PlansController extends Controller
{
   public function plans(){

    $plans =  Plan::where("is_active","on")->get();
     return view('admin.plans.plans')->with('plans',$plans);
   }


   public function add(){
    $services = Service::where('is_active', '1')->get();
  
    return view('admin.plans.add',compact('services'));
   }


   
   public function store(Request $request)
   {
       $validated = $request->validate([
           'name' => 'required',
           'price' => 'required',
           'r_price' => 'required',
           'category' => 'required',
           'disp' => 'required',
           'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
       ]);
   

       $plan = new Plan();
  
       $plan->name = $request->name;
       $plan->price = $request->price;
       $plan->r_price = $request->r_price;
       $plan->time = $request->time_limit; 
       $plan->label = $request->label; 
       $plan->category = $request->category;
       $plan->disp = $request->disp;
       $plan->is_active = $request->is_active;
   
       
       if ($request->hasFile('img')) {
        $imageFile = $request->file('img');
        $imageName = uniqid() . '.' . $imageFile->getClientOriginalExtension();
        $directory = 'uploads/plan';
        $imagePath = $imageFile->move(public_path($directory), $imageName);
        $plan->img = $imagePath;
        }
    
       
       $plan->save();
   
       return redirect()->back()->with('success', 'Plan created successfully.');
   }
   
}

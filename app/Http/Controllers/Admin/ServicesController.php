<?php

namespace App\Http\Controllers\Admin;
use App\Models\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ServicesController extends Controller
{
    public function index(){
        $services = Service::paginate(10);
        return view('admin.services.index')->with('service', $services);
    }
    public function add(Request $request){

        $request->validate([
            'name' => 'required',
            'disp' => 'required',
            'icon' => 'required',
            'img' => 'required',
        ]);

        $serve = New Service;
        $serve->name = $request->name;
        $serve->disp = $request->disp;

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time().'.'.$icon->getClientOriginalExtension();
            $icon->move(public_path('uploads/service/icon'), $iconName);
            $iconPath = 'uploads/service/icon/'.$iconName;
            $serve->icon = $iconPath; 
        }
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $IMGName = time().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/service/img'), $IMGName);
            $imgPath = 'uploads/service/img/'.$IMGName;
            $serve->image = $imgPath; 
        }
        $serve->slug = Str::slug($request->name);
        if($request->is_active){
            $serve->is_active =1;
        }
        
        $serve->save();
        return redirect()->back()->with('success', 'Service added successfully.');
    }
}

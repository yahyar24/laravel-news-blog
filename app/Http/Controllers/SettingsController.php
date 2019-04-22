<?php

namespace App\Http\Controllers;
use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __consetruct()

    {
        $this->middleware('admin');
    }
    

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }
    public function update()

    {
        $this->validate(request(),[
     'site_name' => 'required',
     'contact_number' => 'required',
     'contact_email' => 'required',
     'address' => 'required'
        ]);
        $settings = Setting::first();
        $settings->site_name = request()->site_name;
        $settings->contact_number = request()->contact_number;
        $settings->contact_email = request()->contact_email;
        $settings->address = request()->address;

        $settings->save();

        Session::flash('success' , 'updated settings');

        return redirect()->back();
    }
    
}

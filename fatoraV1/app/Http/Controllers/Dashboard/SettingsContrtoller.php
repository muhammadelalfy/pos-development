<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsContrtoller extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('dashboard.setting.edit',compact('setting'));
    }
    public function update(Request $request){
        $setting = Setting::findOrFail(1);
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('logos/image/'.$setting->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $setting['image']=$filename;
        }
       
        $setting ->update([
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'tax'=>$request->input('tax'),
            'tax_num'=>$request->input('tax_num'),
            'terms'=>$request->input('terms'),
            'address'=>$request->input('address'),
            'commercial'=>$request->input('commercial'),
            'build_no'=>$request->input('build_no'),
            'street'=>$request->input('street'),
            'neboor'=>$request->input('neboor'),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),
            'plus_number_address'=>$request->input('plus_number_address'),
            'postal_code'=>$request->input('postal_code'),
        ]);
        $setting->save();
        return redirect()->back()->with('success' , 'تم التعديل بنجاح');
    }
}

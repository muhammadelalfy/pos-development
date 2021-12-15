<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminsControllers extends Controller
{
    public function view(){

        return view('dashboard.admins.view-admins', ['users' => User::all()]);
    }

    public function store(Request $request){
        $data = new User ();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name = $request->name;
        $data->email = $request->email;
        $data->user_num = $request->user_num;

        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admins.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        // $edit_data = User::find($id);
        return view( 'dashboard.admins.edit-admins', ['users_edit'=>User::find($id)]);
    }
    public function update(Request $request,$id){
        $data =User::find($id);
           if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/image/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image']=$filename;
        }
        $data->name = $request->name;
        $data->email = $request->email;
        $data->user_num = $request->user_num;

        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admins.view')->with('success','تمت التعديل بنجاح ');
    }

        public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admins.view');
    }
    
}

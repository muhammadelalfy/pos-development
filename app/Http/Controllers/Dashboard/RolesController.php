<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolesRequest;
use Illuminate\Http\Request;
use App\Models\Role;
class RolesController extends Controller
{
    public function view(){
    
        // return view('dashboard.roles.view-roles', ['users' => Role::all()]);
        $roles = Role::get();
        return view('dashboard.roles.view-roles',compact('roles'));
    }
    public function store(RolesRequest $request){
        
        try {
            $role = $this->process(new Role,$request);
            if($role)
            return redirect()->route('roles.view')->with(['success','تمت الاضافة بنجاح']);
            else
            return redirect()->route('roles.view')->with(['error','يوجد خطأ']);
        }catch(\Exception $ex){
            return $ex;
            return redirect()->route('roles.view')->with(['error','يوجد خطأ']);
        }
    }
    protected function process(Role $role , Request $r){
        $role->name = $r->name;
        $role->permissions = json_encode($r->permission);
        $role ->save();
        return $role;
    }
}

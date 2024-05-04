<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // public function save(){

    //     admin::create([
    //         'name' => 'mohammad',
    //         'email' => 'm.almasri97.me@gmail.com',
    //         'password' => bcrypt('hello12345'),
    //     ]);

    // }

    public function getLogin(){
        return view('adminDashboard.login.index');
    }

    public function postLogin(Admin $Admin,Request $request){
        //validation in loginrequest
        if(!$request->has('remember'))
                $request->request->add(['remember' => false]);
            else
                $request->request->add(['remember' => true]);

        $remember_me = $request->has('remember') ? true : false; //true save login session user click logout/ false out session dynamic  

        if(auth()->guard('Admin')->attempt(['email' => $request->input('email') , 
                        'password' => $request->input('password')] ,$remember_me)){
        
            return redirect()->Route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'error information login faild']);
    }
}

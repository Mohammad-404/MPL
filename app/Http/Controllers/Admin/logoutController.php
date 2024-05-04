<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function logout( Request $request )
    {
        if(Auth::guard('Admin')->check()) // this means that the admin was logged in.
        {
            Auth::guard('Admin')->logout();
            return redirect()->route('get.login.admin');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}

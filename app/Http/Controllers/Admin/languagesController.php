<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\languages;

class languagesController extends Controller
{
    public function index(){
        $lang = languages::selection()->paginate(20);
        return view('adminDashboard.languages.index',compact('lang'));
    }

    public function form(){
        return view('adminDashboard.languages.form');
    }

    public function insert(Request $request){

        if (!$request->active) {
            $request->request->add(['active'=>0]);
        }else{
            $request->request->add(['active'=>1]);
        }

        languages::create($request->except(['_token']));
        return redirect()->back()->with(['success' => 'Saved has been success']);
    }

}

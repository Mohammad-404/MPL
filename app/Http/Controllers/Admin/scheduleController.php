<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\schedule;

class scheduleController extends Controller
{
    public function index(){
       
        $schedule = schedule::with('teams1','teams2')->selection()->paginate(20);
        return view('adminDashboard.schedule.index',compact('schedule'));
    }

    public function form(){
        return view('adminDashboard.schedule.form');
    }

    public function insert(Request $request){
        schedule::create($request->except(['_token']));
        return redirect()->back()->with(['success' => 'Saved has been success']);
    }
}

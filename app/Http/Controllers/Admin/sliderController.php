<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use Illuminate\Support\Facades\Config; // to get a deafult languages
use Illuminate\Support\Facades\DB;

class sliderController extends Controller
{
    public function index(){
        $deafult_lang = get_deafult_lang();

        $slider = slider::where('translation_lang',$deafult_lang)->selection()->get();

        $arr = slider::with('sliders')->selection()->get(); //for me

        $arrayValues = array_values($arr->all());
        if (!empty($arrayValues)) {
            $slider_relation = $arrayValues[0];
        } else {
            $slider_relation = null;
        }

        return view('adminDashboard.slider.index',compact('slider','slider_relation'));
    }

    public function form(){
        return view('adminDashboard.slider.form');
    }

    public function insert(Request $request){
        
        $sliders = collect($request->slider);

        // here is a deafult languages
        $filter = $sliders -> filter(function ($value,$key){
            return $value['abbr'] == get_deafult_lang();
        });

        $deafult_slider_lang = array_values($filter->all())[0]; // [0] to delete objects and to return array only 

        $filePath = "";
        if($request -> has('photo')){ //hal find image from request??
            $filePath = uploadImage('sliders' , $request->photo);
        }

        // same as slider::create
        // here is a deafult languages
        DB::beginTransaction();
        $deafult_slider_id = slider::insertGetId([
            'translation_lang' => $deafult_slider_lang['abbr'],
            'translation_of' => 0,
            'title' => $deafult_slider_lang['title'],
            'desc' => $deafult_slider_lang['desc'],
            'photo' => $filePath
        ]);

        ///////////////////////
        
        // here is a remeaning languages


        $filter_another_lang = $sliders -> filter(function ($value,$key){
            return $value['abbr'] != get_deafult_lang();
        });

        if (isset($filter_another_lang) && $filter_another_lang->count()) {
            $slider_arr = [];
            foreach ($filter_another_lang as $key => $value) {
                $slider_arr[] = [
                    'translation_lang' => $value['abbr'],
                    'translation_of' => $deafult_slider_id,
                    'title' => $value ['title'],
                    'desc' => $value['desc'],
                    'photo' => $filePath
                ];    
            }
            slider::insert($slider_arr);
        }

        DB::commit();


        // after catch DB::rollback(); // no execute save any data to db

        return redirect()->back()->with(['success' => 'Saved has been success !']);
    }

}
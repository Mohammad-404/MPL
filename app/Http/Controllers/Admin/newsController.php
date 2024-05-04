<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Config; // to get a deafult languages
use Illuminate\Support\Facades\DB;

class newsController extends Controller
{
    public function index(){
        $deafult_lang = get_deafult_lang();

        $news = news::where('translation_lang',$deafult_lang)->selection()->get();

        $arr = news::with('newss')->selection()->get(); //for me

        $arrayValues = array_values($arr->all());
        if (!empty($arrayValues)) {
            $news_relation = $arrayValues[0];
        } else {
            $news_relation = null;
        }

        return view('adminDashboard.news.index',compact('news','news_relation'));
    }

    public function form(){
        return view('adminDashboard.news.form');
    }

    public function insert(Request $request){

        $newss = collect($request->news);

        // here is a deafult languages
        $filter = $newss -> filter(function ($value,$key){
            return $value['abbr'] == get_deafult_lang();
        });

        $deafult_news_lang = array_values($filter->all())[0]; // [0] to delete objects and to return array only 

        $filePath = "";
        if($request -> has('photo')){ //hal find image from request??
            $filePath = uploadImage('sliders' , $request->photo);
        }

        // same as news::create
        // here is a deafult languages
        DB::beginTransaction();
        $deafult_news_id = news::insertGetId([
            'translation_lang' => $deafult_news_lang['abbr'],
            'translation_of' => 0,
            'sub_title' => $deafult_news_lang['sub_title'],
            'title' => $deafult_news_lang['title'],
            'desc' => $deafult_news_lang['desc'],
            'photo' => $filePath
        ]);

        ///////////////////////
        
        // here is a remeaning languages


        $filter_another_lang = $newss -> filter(function ($value,$key){
            return $value['abbr'] != get_deafult_lang();
        });

        if (isset($filter_another_lang) && $filter_another_lang->count()) {
            $news_arr = [];
            foreach ($filter_another_lang as $key => $value) {
                $news_arr[] = [
                    'translation_lang' => $value['abbr'],
                    'translation_of' => $deafult_news_id,
                    'sub_title' => $value ['sub_title'],
                    'title' => $value ['title'],
                    'desc' => $value['desc'],
                    'photo' => $filePath
                ];    
            }
            news::insert($news_arr);
        }

        DB::commit();


        // after catch DB::rollback(); // no execute save any data to db

        return redirect()->back()->with(['success' => 'Saved has been success !']);
    }
}

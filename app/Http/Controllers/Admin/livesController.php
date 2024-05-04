<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\lives;
use Illuminate\Support\Facades\Config; // to get a deafult languages
use Illuminate\Support\Facades\DB;

class livesController extends Controller
{
    public function index(){

        $deafult_lang = get_deafult_lang();

        $lives = lives::where('translation_lang',$deafult_lang)->selection()->get();

        $arr = lives::with('livess','teams1','teams2')->selection()->get(); //for me

        $arrayValues = array_values($arr->all());
        if (!empty($arrayValues)) {
            $lives_relation = $arrayValues[0];
        } else {
            $lives_relation = null;
        }

        return view('adminDashboard.lives.index',compact('lives','lives_relation'));
    }

    public function form(){
        return view('adminDashboard.lives.form');
    }

    public function insert(Request $request){
        $livess = collect($request->lives);

        // here is a deafult languages
        $filter = $livess -> filter(function ($value,$key){
            return $value['abbr'] == get_deafult_lang();
        });

        $deafult_lives_lang = array_values($filter->all())[0]; // [0] to delete objects and to return array only 


        // same as lives::create
        // here is a deafult languages
        DB::beginTransaction();
        $deafult_lives_id = lives::insertGetId([
            'translation_lang' => $deafult_lives_lang['abbr'],
            'translation_of' => 0,
            'team_id' => $deafult_lives_lang['team_id'],
            'team_id2' => $deafult_lives_lang['team_id2'],
            'youtube' => $deafult_lives_lang['youtube'],
            'desc' => $deafult_lives_lang['desc'],
        ]);

        ///////////////////////
        
        // here is a remeaning languages


        $filter_another_lang = $livess -> filter(function ($value,$key){
            return $value['abbr'] != get_deafult_lang();
        });

        if (isset($filter_another_lang) && $filter_another_lang->count()) {
            $lives_arr = [];
            foreach ($filter_another_lang as $key => $value) {
                $lives_arr[] = [
                    'translation_lang' => $value['abbr'],
                    'translation_of' => $deafult_lives_id,
                    'team_id' => $value ['team_id'],
                    'team_id2' => $value ['team_id2'],
                    'desc' => $value['desc'],
                    'youtube' => $value['youtube'],
                ];    
            }
            lives::insert($lives_arr);
        }

        DB::commit();


        // after catch DB::rollback(); // no execute save any data to db

        return redirect()->back()->with(['success' => 'Saved has been success !']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teams;
use Illuminate\Support\Facades\Config; // to get a deafult languages
use Illuminate\Support\Facades\DB;

class teamsController extends Controller
{
    public function index(){
        $deafult_lang = get_deafult_lang();

        $teams = teams::where('translation_lang',$deafult_lang)->selection()->get();

        $arr = teams::with('teamss')->selection()->get(); //for me

        $arrayValues = array_values($arr->all());
        if (!empty($arrayValues)) {
            $teams_relation = $arrayValues[0];
        } else {
            $teams_relation = null;
        }

        return view('adminDashboard.teams.index',compact('teams','teams_relation'));
    }

    public function form(){
        return view('adminDashboard.teams.form');
    }

    public function insert(Request $request){

        $teamss = collect($request->teams);

        // here is a deafult languages
        $filter = $teamss -> filter(function ($value,$key){
            return $value['abbr'] == get_deafult_lang();
        });

        $deafult_teams_lang = array_values($filter->all())[0]; // [0] to delete objects and to return array only 

        $filePath = "";
        if($request -> has('photo')){ //hal find image from request??
            $filePath = uploadImage('sliders' , $request->photo);
        }

        $filePath_logo = "";
        if($request -> has('logo')){ //hal find image from request??
            $filePath_logo = uploadImage('sliders' , $request->logo);
        }

        
    
        // same as teams::create
        // here is a deafult languages
        DB::beginTransaction();
        $deafult_teams_id = teams::insertGetId([
            'translation_lang' => $deafult_teams_lang['abbr'],
            'translation_of' => 0,
            'team_name' => $deafult_teams_lang['team_name'],
            'members' => $deafult_teams_lang['members'],
            'logo' => $filePath_logo,
            'photo' => $filePath
        ]);

        ///////////////////////
        
        // here is a remeaning languages


        $filter_another_lang = $teamss -> filter(function ($value,$key){
            return $value['abbr'] != get_deafult_lang();
        });

        if (isset($filter_another_lang) && $filter_another_lang->count()) {
            $teams_arr = [];
            foreach ($filter_another_lang as $key => $value) {
                $teams_arr[] = [
                    'translation_lang' => $value['abbr'],
                    'translation_of' => $deafult_teams_id,
                    'team_name' => $value ['team_name'],
                    'members' => $value ['members'],
                    'logo' => $filePath_logo,
                    'photo' => $filePath
                ];    
            }
            teams::insert($teams_arr);
        }

        DB::commit();


        // after catch DB::rollback(); // no execute save any data to db

        return redirect()->back()->with(['success' => 'Saved has been success !']);
    }
}

<?php

namespace App\Http\Controllers\PublicWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\languages;
use App\Models\lives;
use App\Models\news;
use App\Models\schedule;
use App\Models\slider;
use App\Models\teams;
use Illuminate\Support\Facades\Session;


class indexController extends Controller
{
    public function index(){

        // *******************Sliders*********************** //

        $deafult_lang = get_deafult_lang();
        $slider_relation = slider::where('translation_lang',$deafult_lang)->selection()->get();

        // *******************Lives*********************** //
        $lives = lives::where('translation_lang',$deafult_lang)->take(2)->get();
        $matched_recoreded = lives::where('translation_lang',$deafult_lang)->selection()->get();
        // *******************News*********************** //
        $news_relation = news::where('translation_lang',$deafult_lang)->selection()->get();
        // *******************Schedule*********************** //
        $schedule = schedule::with('teams1','teams2')->selection()->paginate(20);
        
        return view('PublicWebsite.index',compact('slider_relation','lives','news_relation',
        'schedule','matched_recoreded'));
    }    

    public function newsPage($id,Request $request){
       
        $allSessions = $request->session()->get('localization');
        $deafult_lang = get_deafult_lang();
        $news_relation = news::where(['translation_lang'=>$deafult_lang,'id'=>$id])->selection()->get();

        if ($allSessions == "en") {
            $news_relation = news::where(['translation_lang'=>$deafult_lang,'id'=>$id-1])->selection()->get();
        }
        if ($news_relation->isEmpty()) {
            $news_relation = news::where(['translation_lang'=>$deafult_lang,'id'=>$id])->selection()->get();
        }
        if ($allSessions == "ar") {
            $news_relation = news::where(['translation_lang'=>$deafult_lang,'id'=>$id])->selection()->get();
        }
        if ($news_relation->isEmpty()) {
            $news_relation = news::where(['translation_of'=>$id])->selection()->get();
        }
        return view('PublicWebsite.news',compact('news_relation'));
    }

    public function allNews(){
        $deafult_lang = get_deafult_lang();
        $news_relation = news::where('translation_lang',$deafult_lang)->selection()->paginate(5);
        return view('PublicWebsite.blog-list',compact('news_relation'));
    }

    public function scheduales(){
        $schedule = schedule::with('teams1','teams2')->selection()->paginate(20);
        return view('PublicWebsite.schedule',compact('schedule'));
    }

    public function teams(){
        $deafult_lang = get_deafult_lang();
        $teams_relation = teams::where('translation_lang',$deafult_lang)->selection()->get();

        return view('PublicWebsite.teams',compact('teams_relation'));
    }

    public function lives(){
        $deafult_lang = get_deafult_lang();
        $lives = lives::where('translation_lang',$deafult_lang)->take(2)->get();
        $matched_recoreded = lives::where('translation_lang',$deafult_lang)->selection()->paginate(5);

        return view('PublicWebsite.lives', compact('matched_recoreded','lives'));
    }

}

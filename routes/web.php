<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Localization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['namespace' => 'Admin','middleware' => 'auth:Admin'],function(){

    Route::get('/admin',function(){
        return view('adminDashboard.index');
    })->name('admin.dashboard');

    Route::get('/logout','logoutController@logout')->name('logout');

    Route::group(['prefix' => 'languages'],function(){
        Route::get('/','languagesController@index')->name('lang.index');
        Route::get('/form','languagesController@form')->name("lang.form");
        Route::post('/insert','languagesController@insert')->name('lang.insert');
    });

    Route::group(['prefix' => 'slider'],function(){
        Route::get('/','sliderController@index')->name('slider.index');
        Route::get('/form','sliderController@form')->name('slider.form');
        Route::post('/insert','sliderController@insert')->name('slider.insert');
    });

    Route::group(['prefix' => 'news'],function(){
        Route::get('/','newsController@index')->name('news.index');
        Route::get('/form','newsController@form')->name('news.form');
        Route::post('/insert','newsController@insert')->name('news.insert');
    });

    Route::group(['prefix' => 'teams'],function(){
        Route::get('/','teamsController@index')->name('teams.index');
        Route::get('/form','teamsController@form')->name('teams.form');
        Route::post('/insert','teamsController@insert')->name('teams.insert');
    });

    Route::group(['prefix' => 'lives'],function(){
        Route::get('/','livesController@index')->name('lives.index');
        Route::get('/form','livesController@form')->name("lives.form");
        Route::post('/insert','livesController@insert')->name('lives.insert');
    });

    Route::group(['prefix' => 'schedule'],function(){
        Route::get('/','scheduleController@index')->name('schedule.index');
        Route::get('/form','scheduleController@form')->name("schedule.form");
        Route::post('/insert','scheduleController@insert')->name('schedule.insert');
    });

});

Route::get('/localization/{locale}','Admin\LocalizationController')->name('localization');
Route::group(['middleware' => Localization::class,'namespace' => 'PublicWebsite'],function(){ //for public website
    
    Route::get('/','indexController@index')->name('public.index');
    Route::get('/news/{id}','indexController@newsPage')->name('public.news.id');
    Route::get('/_news/all','indexController@allNews')->name('public.news');
    Route::get('/_schedules','indexController@scheduales')->name('public.scheduales');
    Route::get('/_teams','indexController@teams')->name('public.teams');
    Route::get('/_lives','indexController@lives')->name('public.lives');

});

// Route::get('save', 'Admin\LoginController@save');

Route::group(['namespace' => 'Admin' , 'middleware' => 'guest:Admin'],function(){
    
    Route::get('Login', 'LoginController@getLogin')->name('get.login.admin');
    Route::post('Login', 'LoginController@postLogin')->name('admin.login');
});







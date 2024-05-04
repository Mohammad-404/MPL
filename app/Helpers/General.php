<?php

function get_Languages(){
    return \App\Models\languages::active()->selection()->get();
}

function get_deafult_lang(){
    return Config::get('app.locale');
}

function uploadImage($folder, $image){
    $image->store('/',$folder);
    $filename = $image->hashName();
    $path = '/'.$folder.'/'.$filename;
    return $path;
}


function All_Teams(){
    $teams = \App\Models\teams::selection()->get();
    return $teams; 
}
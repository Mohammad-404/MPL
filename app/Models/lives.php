<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\teams;
use Illuminate\Notifications\Notifiable;

class lives extends Model
{
    use Notifiable;

protected $table = "lives";

protected $fillable = [
    'translation_lang','translation_of','team_id','team_id2','desc','youtube','created_at','updated_at'
];

public function scopeSelection($query){
    return $query->select('id','translation_lang','translation_of','team_id','team_id2','desc','youtube','created_at','updated_at');
}

public function livess(){
    return $this -> hasMany(self::class , 'translation_of');
}

public function teams1(){
    return $this->belongsTo(teams::class, 'team_id', 'id');
}

public function teams2(){
    return $this->belongsTo(teams::class, 'team_id2', 'id');
}

}

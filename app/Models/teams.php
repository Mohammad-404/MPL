<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\lives;
use App\Models\schedule;
use Illuminate\Notifications\Notifiable;

class teams extends Model
{
    use Notifiable;
    
    protected $table = "teams";

    protected $fillable = [
        'translation_lang','translation_of','team_name','members','logo','photo','created_at','updated_at'
    ];


    public function scopeSelection($query){
        return $query->select('id','translation_lang','translation_of','team_name','members',
        'logo','photo','created_at','updated_at');
    }

    public function teamss(){
        return $this -> hasMany(self::class , 'translation_of');
    }

    public function lives(){
        return $this -> belongTo(lives::class,'team_id');
    }

    public function schedule(){
        return $this -> belongTo(schedule::class,'team_id');
    }

}

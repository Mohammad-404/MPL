<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class news extends Model
{
    use Notifiable;

    protected $table = "news";

    protected $fillable = [
        'translation_lang','translation_of','sub_title','title','desc','photo','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','translation_lang','translation_of','sub_title',
        'title','desc','photo','created_at','updated_at');
    }

    public function newss(){
        return $this -> hasMany(self::class , 'translation_of');
    }


}

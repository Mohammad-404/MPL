<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class slider extends Model
{
    use Notifiable;

    protected $table = "slider";

    protected $fillable = [
        'translation_lang','translation_of','slug','title','desc','photo','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','translation_lang','translation_of','slug',
        'title','desc','photo','created_at','updated_at');
    }

    public function sliders(){
        return $this -> hasMany(self::class , 'translation_of');
    }
    
}

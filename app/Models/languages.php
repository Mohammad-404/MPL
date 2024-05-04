<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class languages extends Model
{
    use Notifiable;

    
    protected $table = "languages";

    protected $fillable = [
        'abbr','locale','name','direction','active','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','abbr','locale','name','direction','active','created_at','updated_at');
    }

    public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
        return $this->active == 1 ? 'activated' : 'not activated';
    }


}

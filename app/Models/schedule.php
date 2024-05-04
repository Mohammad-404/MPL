<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\teams;
use Illuminate\Notifications\Notifiable;

class schedule extends Model
{

    use Notifiable;

    protected $table = "schedule";
    
    protected $fillable = [
        'Team_id_1','Team_id_2','date_match','time','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','Team_id_1','Team_id_2','date_match','time','created_at','updated_at');
    }

    public function teams1(){
        return $this->belongsTo(teams::class, 'Team_id_1', 'id');
    }

    public function teams2(){
        return $this->belongsTo(teams::class, 'Team_id_2', 'id');
    }

}

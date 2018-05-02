<?php

namespace App;
use App\Group;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title','body','important','group_id'];
    // protected $guarded = ['id']; otra manera de evitar asignacion masiva pero menos entendible
    
    //creamos un metodo para note
    public function IsImportant(){
        return $this->important == 1;
    }
    
    public function group(){
        return $this->belongsTo(Group::class);
    }

}

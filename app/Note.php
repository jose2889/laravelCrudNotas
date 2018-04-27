<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title','body','important'];
    // protected $guarded = ['id']; otra manera de evitar asignacion masiva pero menos entendible
    
    //creamos un metodo para note
    public function IsImportant(){
        return $this->important == 1;
    }
}

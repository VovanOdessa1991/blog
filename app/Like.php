<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
   public function post(){
       return $this->belongsTo(Like::class);
   }
    public function user(){
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }


    public function laikes(){
        return $this->hasMany(Like::class);

    }



}

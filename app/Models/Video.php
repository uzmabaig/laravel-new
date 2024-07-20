<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded =  [];
    

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function latestcomments(){
        return $this->morphOne(Comment::class,'commentable')->latestOfMany();
    }

    public function oldestcomments(){
        return $this->morphOne(Comment::class,'commentable')->oldestOfMany();
    }

    public function bestcomments(){
        return $this->morphOne(Comment::class,'commentable')->OfMany('likes','max'); //likes means column name
    }

    public function leastcomments(){
        return $this->morphOne(Comment::class,'commentable')->OfMany('likes','min');
    }

    


  
}

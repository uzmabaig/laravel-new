<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false;

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}

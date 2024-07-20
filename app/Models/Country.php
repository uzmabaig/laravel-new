<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false;

    public function writer(){
        return $this->hasMany(Writer::class);
    }

    public function novel(){
        return $this->hasManyThrough(Novel::class,Writer::class);
    }
}

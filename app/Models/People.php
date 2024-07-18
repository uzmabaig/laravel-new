<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false;
    
    public function profession(){
        return $this->belongsToMany(Profession::class,'people_professions');
    }
}

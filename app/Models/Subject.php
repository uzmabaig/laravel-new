<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false;
    
    public function teacher(){
        return $this->BelongsToMany(Teacher::class,'subjectteachers');
    }
}

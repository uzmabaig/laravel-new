<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false;
    
    public function getstudent(){
        return $this->belongsTo(Student::class);
    }
}

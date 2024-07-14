<?php

namespace App\Models;

use App\Http\Controllers\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];
    public $timestamps = false; 

    public function student(){
        return $this->belongsTo(Student::class);
    }
}

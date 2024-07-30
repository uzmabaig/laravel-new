<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticate;

class User extends Authenticate
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];

    public function company(){
        return $this->hasOne(Company::class);
    }
    public function phonenumber(){
        return $this->hasOneThrough(Phonenumber::class,Company::class);
    }

}

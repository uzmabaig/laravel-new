<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;
    public function billS(){
        return $this->hasMany(Bill::class);
    }
    
    public function latestbill(){
        return $this->hasOne(Bill::class)->latestOfMany();
    }

    public function oldestbill(){
        return $this->hasOne(Bill::class)->oldestOfMany();
    }

    public function largestbill(){
        return $this->hasOne(Bill::class)->ofMany('amount','max');
    }

    public function smallestbill(){
        return $this->hasOne(Bill::class)->OfMany('amount'.'min');
    }
}

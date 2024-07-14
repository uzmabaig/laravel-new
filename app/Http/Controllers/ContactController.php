<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        $contact = Contact::withWhereHas('student',function($query){
            $query->where('gender','F');
        })
        ->get();
       
        return $contact;
    }
}
 
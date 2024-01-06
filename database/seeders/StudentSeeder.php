<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{

    
    public function run()
    {
        // method 1
        //    student::create([
    //       'name' => 'Azmat Ali',
    //       'email' => 'azmat@gmail.com'
    //    ]);
    
    // method 2
        // $students = collect(
        //     [
        //     [
        //         'name' => 'Azmat Ali',
        //         'email' => 'azmat@gmail.com'  
        //     ],
        //     [
        //         'name' => 'Nadir Ali',
        //         'email' => 'nadir@gmail.com'  
        //     ],
        //     [
        //         'name' => 'Muzammil Shah',
        //         'email' => 'shah@gmail.com'  
        //     ]
        //     ]
        // );
        //   $students->each(function($value){
        //       student::insert($value);
        //   });
        
    // method 3

    $json = File::get(path:'database/json/students.json');
    $students = collect(json_decode($json));
    $students->each(function($value){
       student::create([
        'name'=> $value->name,
        'email'=> $value->email
       ]);

    });
    }
}

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
           // one to one relation

        $student = Student::create([
                    'name'=>'Shah nawaz',
                    'age'=> 16,
                    'gender'=>'M',
                ]);
        
                $student->contact()->create([
                    'email'=>'shah@gmail.com',
                    'phonenumber'=> '03156340232',
                    'city'=>'Rawalpindi',
                ]);

        // one to many relation

        $student = Student::find(2);
        $student->book()->createmany([
        [
           'title'=>'Arabic', 
           'price'=> 1550,
        ],
        [
           'title'=>'stories',
            'price'=> 1300,
        ]
        
        ]);

     
    
        
 
     }
}

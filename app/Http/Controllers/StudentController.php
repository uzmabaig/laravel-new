<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Student;
use App\Models\Book;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $student = Student::with('contact')->get();
        return $student;

        //  $student = Student::withWhereHas('contact',function($query){  //when you want to search other table you will use withWhereHas
        //      $query->where('city','Karachi');
        // })->get();
        // return $student;
    }
    public function get(){
        $student = Student::with('book')->get();
        // $student = student::with('book')->where('id',2)->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $student = Student::create([
    //         'name'=>'Rabia Noor',
    //         'age'=> 24,
    //         'gender'=>'F',
    //     ]);

    //     $student->contact()->create([
    //         'email'=>'abiha@gmail.com',
    //         'phonenumber'=> '03456340000',
    //         'city'=>'Multan',
    //     ]);
    // }

    public function create()
    {
        $student = Student::find(8);
        $student->book()->create([
            'title'=>'social studies',
            'price'=> 900,
        ]);

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

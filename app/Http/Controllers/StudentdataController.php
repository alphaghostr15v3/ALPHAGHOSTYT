<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Studentdata;

class StudentdataController
{
    function Studentform(Request $request){

        $student = new Studentdata;

        $student->student_id = $request->input('studentId');
        $student->full_name = $request->input('fullName');
        $student->age = $request->input('age');
        $student->course = $request->input('course');
        $student->grade = $request->input('grade');
        $student->email = $request->input('email');
        $student->status = $request->input('status');

        $student->save();

        return back();
    }
    
    
    function Studentdata(){
        // return view('studentdata');

       $data = DB::table('studentdatas')->get();

       return view('studentdata', ['data'=>$data]);


    }
}

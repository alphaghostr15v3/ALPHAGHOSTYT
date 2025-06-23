<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class FormController
{
    function Form(Request $request){
        

        // useing migration file through insert data into database

        // $data = new student;
        
        // $data->name = $request->input('name');
        // $data->father = $request->input('father');
        // $data->mother = $request->input('mother');
        // $data->address = $request->input('address');
        // $data->mob = $request->input('mob');
        // $data->email = $request->input('email');
        // $data['skill'] = implode(',', $request->skill);
        // $data->gender = $request->input('gender');
        // $data->state = $request->input('state');
        // $data->age = $request->input('age');
        
        // $data->save();

        // return back();


        // useing through direct data insert to the database

        $students = new Student;

        $students->name = $request->input('name');
        $students->father = $request->input('father');
        $students->mother = $request->input('mother');
        $students->address = $request->input('address');
        $students->mob = $request->input('mob');
        $students->email = $request->input('email');
        $students['skill'] = implode(',', $request->skill);
        $students->gender = $request->input('gender');
        $students->state = $request->input('state');
        $students->age = $request->input('age');

        $students->save();

        return back();
    }
    function Datashow(){
        
        
        // $records = Student::all();                           { all data fetch using modal}

        // return view('record', compact('records'));           { this data fecth using data }

        $data = DB::table('students')->get();

        return view('record', ['data' => $data]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    function User(Request $request){
        $request->validate([
            'student'=>'required | min:3 | max:15 | uppercase',
            'father'=>'required',
            'mother'=>'required',
            'address'=>'required',
            'mob'=>'required | max:12',
            'email'=>'email',
            'skill'=>'required',
            'gender'=>'required',
            'state'=>'required',
            'age'=>'required'

        ],[
            'student.required'=>'student filed is not empty',
            'student.uppercase'=>'student must be Uppercase only',
            'student.min'=>'student should be at list 3 chareacter will be required',
            'student.max'=>'student should be at list 15 charecter will be required',
            // 'email.email'=>'this email is not valid',
            'father.required'=>'father filed is not empty',
            'mother.required'=>'mother filed is not empty',
            'address.required'=>'address filed is not empty',
        ]);

        return $request;
        // return $request;
        // echo $request->student;
        // echo '<br>';
        // echo $request->father;
        // echo '<br>';
        // echo $request->mother;
        // echo '<br>';
        // echo $request->address;
        // echo '<br>';
        // echo $request->mob;
        // echo '<br>';
        // echo $request->gender;
        // echo "<br>";
        // echo $request->state;
        // echo "<br>";
        // echo $request->age;
        // echo "<br>";
        // print_r($request->skill);
        // print_r() show array
    }
}

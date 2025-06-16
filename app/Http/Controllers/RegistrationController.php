<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function Registration(Request $request){
        echo $request->student;
        echo '<br>';
        echo $request->father;
        echo '<br>';
        echo $request->mother;
        echo '<br>';
        echo $request->address;
        echo '<br>';
        echo $request->mob;
        echo '<br>';
        echo $request->city;
        echo '<br>';
        echo $request->gender;
        echo '<br>';
    }
}

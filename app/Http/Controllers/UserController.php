<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function User(Request $request){
        // return $request;
        echo $request->gender;
        echo "<br>";
        echo $request->state;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        print_r($request->skill);
        // print_r() show array
    }
}

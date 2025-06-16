<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function Index(){
        return view('index');
    }

    function About(){
        return view('about');
    }

    function Home(){
        return view('home');
    }

    function ContactUs(){
        $name = "shubham";
        $state = ["Kanpur", "Mumbai", "Delhi", "Lucknow"];
        return view('contactus', ['name'=>$name, 'city'=>$state]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    function kali($name){
        return view('urlshow', ['name'=>$name]);
    }
}

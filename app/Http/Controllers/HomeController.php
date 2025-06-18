<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    function Home(){
        // return redirect()->to('/Home/index/user/about');
        return to_route('user');
    }
    function User(){
        return to_route('user', ['name'=>'golu']);
    }
}

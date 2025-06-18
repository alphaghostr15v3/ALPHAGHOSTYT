<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController
{
    function Index(){
        // return redirect()->to('/Home/index/user-form');
        return to_route('form');
    }
}

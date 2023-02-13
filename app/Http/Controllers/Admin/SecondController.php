<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except("ShowString2");
    }
    public function ShowString(){
        return "ccccc";

    }
    public function ShowString1(){
        return "ccccc 1";

    }
    public function ShowString2(){
        return "ccccc 2";

    }
    //
}

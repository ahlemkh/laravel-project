<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;



class UserController extends Controller
{
    public function getIndex(){
        $obj= new \stdClass();
        $obj->name="ahlem";
        $obj->age=24;
        $tab=['ahlem','ahmed'];
        $tab2=[];
        return view('welcome',compact('tab2'));
     
    }
}

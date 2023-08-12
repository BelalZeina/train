<?php

namespace App\Http\Controllers\Admin;
// use App\Models\User;
// use Illuminate\View\view;
use Illuminate\Routing\Controller;
class FirstController extends Controller
{
    function __construct(){
        $this->middleware("auth")->except("showString2");
    }
    public function showAdminName(){
        return "Belal Zeina";
    }
    public function showString(){
        return "string 0";
    }
    public function showString1(){
        return "string 1";
    }
    public function showString2(){
        return "string 2";
    }
    public function showString3(){
        return "string 3";
    }
    // public function showInfo(){
    //     return "name :belal <br> Age:20";
    // }


}

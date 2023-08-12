<?php

namespace App\Http\Controllers;
// use App\Models\User;
// use Illuminate\View\view;

class UserController extends Controller
{
    public function showUserName(){
        return "Belal Zeina";
    }
    public function showInfo(){
        return "name :belal <br> Age:20";
    }


}
